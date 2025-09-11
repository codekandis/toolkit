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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0033 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			33000 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33001 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33002 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33003 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33004 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33005 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33006 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33007 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33008 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33009 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33010 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33011 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33012 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33013 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33014 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33015 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33016 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33017 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33018 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33019 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33020 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33021 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33022 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33023 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33024 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33025 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33026 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33027 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33028 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33029 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33030 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33031 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33032 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33033 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33034 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33035 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33036 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33037 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33038 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33039 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33040 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33041 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33042 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33043 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33044 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33045 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33046 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33047 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33048 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33049 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33050 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33051 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33052 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33053 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33054 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33055 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33056 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33057 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33058 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33059 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33060 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33061 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33062 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33063 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33064 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33065 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33066 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33067 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33068 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33069 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33070 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33071 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33072 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33073 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33074 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33075 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33076 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33077 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33078 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33079 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33080 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33081 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33082 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33083 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33084 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33085 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33086 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33087 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33088 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33089 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33090 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33091 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33092 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33093 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33094 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33095 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33096 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33097 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33098 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33099 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33100 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33101 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33102 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33103 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33104 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33105 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33106 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33107 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33108 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33109 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33110 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33111 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33112 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33113 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33114 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33115 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33116 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33117 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33118 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33119 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33120 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33121 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33122 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33123 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33124 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33125 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33126 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33127 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33128 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33129 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33130 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33131 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33132 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33133 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33134 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33135 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33136 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33137 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33138 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33139 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33140 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33141 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33142 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33143 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33144 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33145 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33146 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33147 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33148 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33149 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33150 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33151 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33152 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33153 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33154 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33155 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33156 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33157 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33158 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33159 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33160 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33161 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33162 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33163 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33164 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33165 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33166 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33167 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33168 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33169 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33170 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33171 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33172 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33173 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33174 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33175 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33176 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33177 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33178 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33179 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33180 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33181 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33182 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33183 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33184 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33185 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33186 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33187 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33188 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33189 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33190 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33191 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33192 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33193 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33194 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33195 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33196 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33197 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33198 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33199 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33200 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33201 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33202 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33203 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33204 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33205 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33206 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33207 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33208 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33209 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33210 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33211 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33212 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33213 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33214 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33215 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33216 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33217 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33218 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33219 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33220 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33221 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33222 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33223 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33224 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33225 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33226 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33227 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33228 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33229 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33230 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33231 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33232 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33233 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33234 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33235 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33236 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33237 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33238 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33239 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33240 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33241 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33242 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33243 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33244 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33245 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33246 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33247 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33248 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33249 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33250 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33251 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33252 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33253 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33254 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33255 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33256 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33257 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33258 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33259 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33260 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33261 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33262 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33263 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33264 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33265 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33266 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33267 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33268 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33269 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33270 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33271 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33272 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33273 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33274 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33275 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33276 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33277 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33278 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33279 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33280 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33281 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33282 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33283 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33284 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33285 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33286 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33287 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33288 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33289 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33290 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33291 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33292 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33293 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33294 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33295 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33296 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33297 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33298 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33299 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33300 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33301 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33302 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33303 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33304 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33305 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33306 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33307 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33308 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33309 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33310 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33311 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33312 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33313 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33314 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33315 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33316 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33317 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33318 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33319 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33320 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33321 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33322 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33323 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33324 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33325 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33326 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33327 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33328 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33329 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33330 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33331 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33332 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33333 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33334 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33335 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33336 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33337 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33338 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33339 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33340 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33341 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33342 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33343 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33344 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33345 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33346 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33347 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33348 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33349 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33350 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33351 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33352 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33353 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33354 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33355 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33356 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33357 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33358 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33359 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33360 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33361 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33362 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33363 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33364 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33365 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33366 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33367 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33368 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33369 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33370 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33371 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33372 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33373 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33374 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33375 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33376 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33377 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33378 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33379 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33380 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33381 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33382 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33383 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33384 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33385 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33386 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33387 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33388 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33389 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33390 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33391 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33392 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33393 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33394 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33395 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33396 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33397 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33398 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33399 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33400 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33401 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33402 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33403 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33404 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33405 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33406 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33407 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33408 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33409 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33410 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33411 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33412 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33413 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33414 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33415 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33416 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33417 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33418 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33419 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33420 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33421 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33422 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33423 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33424 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33425 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33426 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33427 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33428 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33429 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33430 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33431 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33432 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33433 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33434 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33435 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33436 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33437 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33438 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33439 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33440 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33441 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33442 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33443 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33444 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33445 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33446 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33447 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33448 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33449 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33450 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33451 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33452 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33453 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33454 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33455 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33456 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33457 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33458 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33459 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33460 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33461 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33462 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33463 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33464 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33465 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33466 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33467 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33468 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33469 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33470 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33471 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33472 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33473 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33474 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33475 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33476 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33477 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33478 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33479 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33480 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33481 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33482 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33483 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33484 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33485 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33486 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33487 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33488 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33489 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33490 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33491 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33492 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33493 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33494 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33495 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33496 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33497 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33498 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33499 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33500 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33501 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33502 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33503 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33504 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33505 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33506 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33507 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33508 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33509 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33510 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33511 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33512 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33513 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33514 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33515 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33516 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33517 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33518 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33519 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33520 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33521 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33522 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33523 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33524 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33525 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33526 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33527 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33528 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33529 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33530 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33531 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33532 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33533 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33534 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33535 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33536 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33537 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33538 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33539 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33540 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33541 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33542 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33543 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33544 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33545 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33546 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33547 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33548 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33549 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33550 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33551 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33552 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33553 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33554 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33555 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33556 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33557 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33558 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33559 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33560 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33561 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33562 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33563 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33564 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33565 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33566 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33567 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33568 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33569 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33570 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33571 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33572 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33573 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33574 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33575 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33576 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33577 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33578 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33579 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33580 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33581 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33582 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33583 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33584 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33585 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33586 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33587 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33588 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33589 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33590 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33591 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33592 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33593 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33594 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33595 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33596 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33597 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33598 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33599 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33600 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33601 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33602 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33603 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33604 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33605 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33606 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33607 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33608 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33609 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33610 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33611 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33612 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33613 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33614 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33615 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33616 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33617 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33618 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33619 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33620 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33621 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33622 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33623 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33624 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33625 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33626 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33627 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33628 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33629 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33630 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33631 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33632 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33633 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33634 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33635 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33636 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33637 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33638 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33639 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33640 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33641 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33642 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33643 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33644 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33645 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33646 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33647 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33648 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33649 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33650 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33651 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33652 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33653 => [
				'validator'                => new IsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33654 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33655 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33656 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33657 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33658 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33659 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33660 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33661 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33662 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33663 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33664 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33665 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33666 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33667 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33668 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33669 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33670 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33671 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33672 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33673 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33674 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33675 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33676 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33677 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33678 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33679 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33680 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33681 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33682 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33683 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33684 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33685 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33686 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33687 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33688 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33689 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33690 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33691 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33692 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33693 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33694 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33695 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33696 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33697 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33698 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33699 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33700 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33701 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33702 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33703 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33704 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33705 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33706 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33707 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33708 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33709 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33710 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33711 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33712 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33713 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33714 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33715 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33716 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33717 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33718 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33719 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33720 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33721 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33722 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33723 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33724 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33725 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33726 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33727 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33728 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33729 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33730 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33731 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33732 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33733 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33734 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33735 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33736 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33737 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33738 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33739 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33740 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33741 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33742 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33743 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33744 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33745 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33746 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33747 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33748 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33749 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33750 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33751 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33752 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33753 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33754 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33755 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33756 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33757 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33758 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33759 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33760 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33761 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33762 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33763 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33764 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33765 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33766 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33767 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33768 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33769 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33770 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33771 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33772 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33773 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33774 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33775 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33776 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33777 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33778 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33779 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33780 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33781 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33782 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33783 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33784 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33785 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33786 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33787 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33788 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33789 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33790 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33791 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33792 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33793 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33794 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33795 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33796 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33797 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33798 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33799 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33800 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33801 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33802 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33803 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33804 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33805 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33806 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33807 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33808 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33809 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33810 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33811 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33812 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33813 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33814 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33815 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33816 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33817 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33818 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33819 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33820 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33821 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33822 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33823 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33824 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33825 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33826 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33827 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33828 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33829 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33830 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33831 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33832 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33833 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33834 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33835 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33836 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33837 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33838 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33839 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33840 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33841 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33842 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33843 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33844 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33845 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33846 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33847 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33848 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33849 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33850 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33851 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33852 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33853 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33854 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33855 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33856 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33857 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33858 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33859 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33860 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33861 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33862 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33863 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33864 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33865 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33866 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33867 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33868 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33869 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33870 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33871 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33872 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33873 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33874 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33875 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33876 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33877 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33878 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33879 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33880 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33881 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33882 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33883 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33884 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33885 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33886 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33887 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33888 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33889 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33890 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33891 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33892 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33893 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33894 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33895 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33896 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33897 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33898 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33899 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33900 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33901 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33902 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33903 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33904 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33905 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			33906 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33907 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33908 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33909 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33910 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33911 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33912 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33913 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33914 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33915 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33916 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33917 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33918 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33919 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33920 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33921 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33922 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33923 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33924 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33925 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33926 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33927 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33928 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33929 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33930 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33931 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33932 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33933 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33934 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33935 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33936 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33937 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33938 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33939 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33940 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33941 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33942 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33943 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33944 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33945 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33946 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33947 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33948 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33949 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33950 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33951 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33952 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33953 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33954 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33955 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33956 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33957 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33958 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33959 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33960 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33961 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33962 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33963 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33964 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33965 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33966 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33967 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33968 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33969 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33970 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33971 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33972 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33973 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33974 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33975 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33976 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33977 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33978 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33979 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33980 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33981 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33982 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33983 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33984 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33985 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33986 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33987 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33988 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33989 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33990 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33991 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33992 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33993 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33994 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33995 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33996 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33997 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33998 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			33999 => [
				'validator'                => new IsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
