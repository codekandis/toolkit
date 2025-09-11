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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0089 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			89000 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89001 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89002 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89003 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89004 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89005 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89006 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89007 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89008 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89009 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89010 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89011 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89012 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89013 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89014 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89015 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89016 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89017 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89018 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89019 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89020 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89021 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89022 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89023 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89024 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89025 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89026 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89027 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89028 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89029 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89030 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89031 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89032 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89033 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89034 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89035 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89036 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89037 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89038 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89039 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89040 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89041 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89042 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89043 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89044 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89045 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89046 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89047 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89048 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89049 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89050 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89051 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89052 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89053 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89054 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89055 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89056 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89057 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89058 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89059 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89060 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89061 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89062 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89063 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89064 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89065 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89066 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89067 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89068 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89069 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89070 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89071 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89072 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89073 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89074 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89075 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89076 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89077 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89078 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89079 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89080 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89081 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89082 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89083 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89084 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89085 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89086 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89087 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89088 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89089 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89090 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89091 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89092 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89093 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89094 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89095 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89096 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89097 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89098 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89099 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89100 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89101 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89102 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89103 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89104 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89105 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89106 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89107 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89108 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89109 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89110 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89111 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89112 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89113 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89114 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89115 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89116 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89117 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89118 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89119 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89120 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89121 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89122 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89123 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89124 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89125 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89126 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89127 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89128 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89129 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89130 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89131 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89132 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89133 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89134 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89135 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89136 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89137 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89138 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89139 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89140 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89141 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89142 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89143 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89144 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89145 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89146 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89147 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89148 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89149 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89150 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89151 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89152 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89153 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89154 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89155 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89156 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89157 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89158 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89159 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89160 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89161 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89162 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89163 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89164 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89165 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89166 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89167 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89168 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89169 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89170 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89171 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89172 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89173 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89174 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89175 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89176 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89177 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89178 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89179 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89180 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89181 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89182 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89183 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89184 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89185 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89186 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89187 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89188 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89189 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89190 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89191 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89192 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89193 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89194 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89195 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89196 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89197 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89198 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89199 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89200 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89201 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89202 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89203 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89204 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89205 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89206 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89207 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89208 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89209 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89210 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89211 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89212 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89213 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89214 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89215 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89216 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89217 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89218 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89219 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89220 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89221 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89222 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89223 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89224 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89225 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89226 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89227 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89228 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89229 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89230 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89231 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89232 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89233 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89234 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89235 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89236 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89237 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89238 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89239 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89240 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89241 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89242 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89243 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89244 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89245 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89246 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89247 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89248 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89249 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89250 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89251 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89252 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89253 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89254 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89255 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89256 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89257 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89258 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89259 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89260 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89261 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89262 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89263 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89264 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89265 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89266 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89267 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89268 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89269 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89270 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89271 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89272 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89273 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89274 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89275 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89276 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89277 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89278 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89279 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89280 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89281 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89282 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89283 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89284 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89285 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89286 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89287 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89288 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89289 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89290 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89291 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89292 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89293 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89294 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89295 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89296 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89297 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89298 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89299 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89300 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89301 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89302 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89303 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89304 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89305 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89306 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89307 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89308 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89309 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89310 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89311 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89312 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89313 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89314 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89315 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89316 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89317 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89318 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89319 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89320 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89321 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89322 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89323 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89324 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89325 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89326 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89327 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89328 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89329 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89330 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89331 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89332 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89333 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89334 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89335 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89336 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89337 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89338 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89339 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89340 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89341 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89342 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89343 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89344 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89345 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89346 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89347 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89348 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89349 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89350 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89351 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89352 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89353 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89354 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89355 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89356 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89357 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89358 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89359 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89360 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89361 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89362 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89363 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89364 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89365 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89366 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89367 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89368 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89369 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89370 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89371 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89372 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89373 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89374 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89375 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89376 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89377 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89378 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89379 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89380 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89381 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89382 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89383 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89384 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89385 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89386 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89387 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89388 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89389 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89390 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89391 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89392 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89393 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89394 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89395 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89396 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89397 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89398 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89399 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89400 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89401 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89402 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89403 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89404 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89405 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89406 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89407 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89408 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89409 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89410 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89411 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89412 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89413 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89414 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89415 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89416 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89417 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89418 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89419 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89420 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89421 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89422 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89423 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89424 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89425 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89426 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89427 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89428 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89429 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89430 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89431 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89432 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89433 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89434 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89435 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89436 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89437 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89438 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89439 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89440 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89441 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89442 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89443 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89444 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89445 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89446 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89447 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89448 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89449 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89450 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89451 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89452 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89453 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89454 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89455 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89456 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89457 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89458 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89459 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectMixedArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89460 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89461 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89462 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89463 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89464 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89465 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89466 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89467 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89468 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89469 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89470 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89471 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89472 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89473 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89474 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89475 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89476 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89477 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89478 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89479 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89480 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89481 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89482 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89483 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89484 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89485 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89486 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89487 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89488 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89489 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89490 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89491 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89492 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89493 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89494 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89495 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89496 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89497 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89498 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89499 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89500 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89501 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89502 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89503 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89504 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89505 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89506 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89507 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89508 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89509 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89510 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89511 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89512 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89513 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89514 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89515 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89516 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89517 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89518 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89519 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89520 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89521 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89522 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89523 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89524 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89525 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89526 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89527 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89528 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89529 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89530 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89531 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89532 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89533 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89534 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89535 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89536 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89537 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89538 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89539 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89540 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89541 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89542 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89543 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89544 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89545 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89546 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89547 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89548 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89549 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89550 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89551 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89552 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89553 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89554 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89555 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89556 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89557 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89558 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89559 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89560 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89561 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89562 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89563 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89564 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89565 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89566 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89567 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89568 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89569 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89570 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89571 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89572 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89573 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89574 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89575 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89576 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89577 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89578 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89579 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89580 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89581 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89582 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89583 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89584 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89585 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89586 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89587 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89588 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89589 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89590 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89591 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89592 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89593 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89594 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89595 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89596 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89597 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89598 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89599 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89600 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89601 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89602 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89603 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89604 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89605 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89606 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89607 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89608 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89609 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89610 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89611 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89612 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89613 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89614 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89615 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89616 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89617 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89618 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89619 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89620 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89621 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89622 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89623 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89624 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89625 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89626 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89627 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89628 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89629 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89630 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89631 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89632 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89633 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89634 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89635 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89636 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89637 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89638 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89639 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89640 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89641 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89642 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89643 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89644 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89645 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89646 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89647 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89648 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89649 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89650 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89651 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89652 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89653 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89654 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89655 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89656 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89657 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89658 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89659 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89660 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89661 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89662 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89663 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89664 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89665 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89666 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89667 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89668 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89669 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89670 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89671 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89672 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89673 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89674 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89675 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89676 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89677 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89678 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89679 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89680 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89681 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89682 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89683 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89684 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89685 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89686 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89687 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89688 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89689 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89690 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89691 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89692 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89693 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89694 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89695 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89696 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89697 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89698 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89699 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89700 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89701 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89702 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89703 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89704 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89705 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89706 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89707 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89708 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89709 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89710 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89711 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89712 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89713 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89714 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89715 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89716 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89717 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89718 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89719 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89720 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89721 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89722 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89723 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89724 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89725 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89726 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89727 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89728 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89729 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89730 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89731 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89732 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89733 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89734 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89735 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89736 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89737 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89738 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89739 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89740 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89741 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89742 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89743 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89744 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89745 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89746 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89747 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89748 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89749 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89750 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89751 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89752 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89753 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89754 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89755 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89756 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89757 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89758 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89759 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89760 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89761 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89762 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89763 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89764 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89765 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89766 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89767 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89768 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89769 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89770 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89771 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89772 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89773 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89774 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89775 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89776 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89777 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89778 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89779 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89780 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89781 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89782 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89783 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89784 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89785 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89786 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89787 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89788 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89789 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89790 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89791 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89792 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89793 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89794 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89795 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89796 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89797 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89798 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89799 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89800 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89801 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89802 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89803 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89804 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89805 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89806 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89807 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89808 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89809 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89810 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89811 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89812 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89813 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89814 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89815 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89816 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89817 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89818 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89819 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89820 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89821 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89822 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89823 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89824 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89825 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89826 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89827 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89828 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89829 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89830 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89831 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89832 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89833 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89834 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89835 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89836 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89837 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89838 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89839 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89840 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89841 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89842 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89843 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89844 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89845 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89846 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89847 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89848 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89849 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89850 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89851 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89852 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89853 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89854 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89855 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89856 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89857 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89858 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89859 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89860 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89861 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89862 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89863 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89864 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89865 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89866 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89867 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89868 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89869 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89870 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89871 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89872 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89873 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89874 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89875 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89876 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89877 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89878 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89879 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89880 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89881 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89882 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89883 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89884 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89885 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89886 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			89887 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89888 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89889 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89890 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89891 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89892 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89893 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89894 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89895 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89896 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89897 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89898 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89899 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89900 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89901 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89902 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89903 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89904 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89905 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89906 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89907 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89908 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89909 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89910 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89911 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89912 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89913 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89914 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89915 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89916 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89917 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89918 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89919 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89920 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89921 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89922 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89923 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89924 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89925 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89926 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89927 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89928 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89929 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89930 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89931 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89932 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89933 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89934 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89935 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89936 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89937 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89938 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89939 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89940 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89941 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89942 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89943 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89944 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89945 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89946 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89947 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89948 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89949 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89950 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89951 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89952 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89953 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89954 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89955 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89956 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89957 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89958 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89959 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89960 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89961 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89962 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89963 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89964 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89965 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89966 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89967 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89968 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89969 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89970 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89971 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89972 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89973 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89974 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89975 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89976 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89977 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89978 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89979 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89980 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89981 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89982 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89983 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89984 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89985 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89986 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89987 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89988 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89989 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89990 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89991 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89992 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89993 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89994 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89995 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89996 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89997 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89998 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			89999 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
