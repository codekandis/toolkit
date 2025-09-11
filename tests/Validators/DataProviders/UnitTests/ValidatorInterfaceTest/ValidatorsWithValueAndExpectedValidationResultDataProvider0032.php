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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0032 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			32000 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32001 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32002 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32003 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32004 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32005 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32006 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32007 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32008 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32009 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32010 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32011 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32012 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32013 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32014 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32015 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32016 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32017 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32018 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32019 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32020 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32021 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32022 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32023 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32024 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32025 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32026 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32027 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32028 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32029 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32030 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32031 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32032 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32033 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32034 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32035 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32036 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32037 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32038 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32039 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32040 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32041 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32042 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32043 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32044 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32045 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32046 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32047 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32048 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32049 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32050 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32051 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32052 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32053 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32054 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32055 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32056 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32057 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32058 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32059 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32060 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32061 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32062 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32063 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32064 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32065 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32066 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32067 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32068 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32069 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32070 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32071 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32072 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32073 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32074 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32075 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32076 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32077 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32078 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32079 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32080 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32081 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32082 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32083 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32084 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32085 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32086 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32087 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32088 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32089 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32090 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32091 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32092 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32093 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32094 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32095 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32096 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32097 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32098 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32099 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32100 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32101 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32102 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32103 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32104 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32105 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32106 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32107 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32108 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32109 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32110 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32111 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32112 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32113 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32114 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32115 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32116 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32117 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32118 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32119 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32120 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32121 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32122 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32123 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32124 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32125 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32126 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32127 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32128 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32129 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32130 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32131 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32132 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32133 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			32134 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			32135 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32136 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32137 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32138 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32139 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32140 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32141 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32142 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32143 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32144 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32145 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32146 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32147 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32148 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32149 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32150 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32151 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32152 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32153 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32154 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32155 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32156 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32157 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32158 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32159 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32160 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32161 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32162 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32163 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32164 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32165 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32166 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32167 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32168 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32169 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32170 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32171 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32172 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32173 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32174 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32175 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32176 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32177 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32178 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32179 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32180 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32181 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32182 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32183 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32184 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32185 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32186 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32187 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32188 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32189 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32190 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32191 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32192 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32193 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32194 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32195 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32196 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32197 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32198 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32199 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32200 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32201 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32202 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32203 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32204 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32205 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32206 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32207 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32208 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32209 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32210 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32211 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32212 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32213 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32214 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32215 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32216 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32217 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32218 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32219 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32220 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32221 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32222 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32223 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32224 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32225 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32226 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32227 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32228 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32229 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32230 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32231 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32232 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32233 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32234 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32235 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32236 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32237 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32238 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32239 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32240 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32241 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32242 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32243 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32244 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32245 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32246 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32247 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32248 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32249 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32250 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32251 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32252 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32253 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32254 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32255 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32256 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32257 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32258 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32259 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32260 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32261 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32262 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32263 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32264 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32265 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32266 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32267 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32268 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32269 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32270 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32271 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32272 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32273 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32274 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32275 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32276 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32277 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32278 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32279 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32280 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32281 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32282 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32283 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32284 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32285 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32286 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32287 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32288 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32289 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32290 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32291 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32292 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32293 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32294 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32295 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32296 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32297 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32298 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32299 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32300 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32301 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32302 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32303 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32304 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32305 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32306 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32307 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32308 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32309 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32310 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32311 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32312 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32313 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32314 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32315 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32316 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32317 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32318 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32319 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32320 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32321 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32322 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32323 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32324 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32325 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32326 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32327 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32328 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32329 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32330 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32331 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32332 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32333 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32334 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32335 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32336 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32337 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32338 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32339 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32340 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32341 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32342 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32343 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32344 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32345 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32346 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			32347 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			32348 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32349 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32350 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32351 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32352 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32353 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32354 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32355 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32356 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32357 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32358 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32359 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32360 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32361 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32362 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32363 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32364 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32365 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32366 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32367 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32368 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32369 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32370 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32371 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32372 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32373 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32374 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32375 => [
				'validator'                => new IsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32376 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32377 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32378 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32379 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32380 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32381 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32382 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32383 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32384 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32385 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32386 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32387 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32388 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32389 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32390 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32391 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32392 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32393 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32394 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32395 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32396 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32397 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32398 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32399 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32400 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32401 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32402 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32403 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32404 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32405 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32406 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32407 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32408 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32409 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32410 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32411 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32412 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32413 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32414 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32415 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32416 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32417 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32418 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32419 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32420 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32421 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32422 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32423 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32424 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32425 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32426 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32427 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32428 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32429 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32430 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32431 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32432 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32433 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32434 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32435 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32436 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32437 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32438 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32439 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32440 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32441 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32442 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32443 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32444 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32445 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32446 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32447 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32448 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32449 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32450 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32451 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32452 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32453 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32454 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32455 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32456 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32457 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32458 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32459 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32460 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32461 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32462 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32463 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32464 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32465 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32466 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32467 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32468 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32469 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32470 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32471 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32472 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32473 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32474 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32475 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32476 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32477 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32478 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32479 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32480 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32481 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32482 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32483 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32484 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32485 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32486 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32487 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32488 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32489 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32490 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32491 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32492 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32493 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32494 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32495 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32496 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32497 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32498 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32499 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32500 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32501 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32502 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32503 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32504 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32505 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32506 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32507 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32508 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32509 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32510 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32511 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32512 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32513 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32514 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32515 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32516 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32517 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32518 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32519 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32520 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32521 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32522 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32523 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32524 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32525 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32526 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32527 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32528 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32529 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32530 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32531 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32532 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32533 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32534 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32535 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32536 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32537 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32538 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32539 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32540 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32541 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32542 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32543 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32544 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32545 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32546 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32547 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32548 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32549 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32550 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32551 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32552 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32553 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32554 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32555 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32556 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32557 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32558 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32559 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32560 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32561 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32562 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32563 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32564 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32565 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			32566 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32567 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32568 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32569 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32570 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32571 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32572 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32573 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32574 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32575 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32576 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32577 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32578 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32579 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32580 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32581 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32582 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32583 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32584 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32585 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32586 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32587 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32588 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32589 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32590 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32591 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32592 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32593 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32594 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32595 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32596 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32597 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32598 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32599 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32600 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32601 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32602 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32603 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32604 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32605 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32606 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32607 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32608 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32609 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32610 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32611 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32612 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32613 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32614 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32615 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32616 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32617 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32618 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32619 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32620 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32621 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32622 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32623 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32624 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32625 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32626 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32627 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32628 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32629 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32630 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32631 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32632 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32633 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32634 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32635 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32636 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32637 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32638 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32639 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32640 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32641 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32642 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32643 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32644 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32645 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32646 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32647 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32648 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32649 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32650 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32651 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32652 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32653 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32654 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32655 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32656 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32657 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32658 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32659 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32660 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32661 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32662 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32663 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32664 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32665 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32666 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32667 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32668 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32669 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32670 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32671 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32672 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32673 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32674 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32675 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32676 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32677 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32678 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32679 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32680 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32681 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32682 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32683 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32684 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32685 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32686 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32687 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32688 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32689 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32690 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32691 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32692 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32693 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32694 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32695 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32696 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32697 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32698 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32699 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32700 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32701 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32702 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32703 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32704 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32705 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32706 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32707 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32708 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32709 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32710 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32711 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32712 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32713 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32714 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32715 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32716 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32717 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32718 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32719 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32720 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32721 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32722 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32723 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32724 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32725 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32726 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32727 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32728 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32729 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32730 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32731 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32732 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32733 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32734 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32735 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32736 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32737 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32738 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32739 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32740 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32741 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32742 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32743 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32744 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32745 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32746 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32747 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32748 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32749 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32750 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32751 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32752 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32753 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32754 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32755 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32756 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32757 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32758 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32759 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32760 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32761 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32762 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32763 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32764 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32765 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32766 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32767 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32768 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32769 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32770 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32771 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32772 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32773 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32774 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32775 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32776 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32777 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32778 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32779 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			32780 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32781 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32782 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32783 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32784 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32785 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32786 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32787 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32788 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32789 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32790 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32791 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32792 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32793 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32794 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32795 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32796 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32797 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32798 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32799 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32800 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32801 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32802 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32803 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32804 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32805 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32806 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32807 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32808 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32809 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32810 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32811 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32812 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32813 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32814 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32815 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32816 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32817 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32818 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32819 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32820 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32821 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32822 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32823 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32824 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32825 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32826 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32827 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32828 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32829 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32830 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32831 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32832 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32833 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32834 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32835 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32836 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32837 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32838 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32839 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32840 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32841 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32842 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32843 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32844 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32845 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32846 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32847 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32848 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32849 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32850 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32851 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32852 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32853 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32854 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32855 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32856 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32857 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32858 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32859 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32860 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32861 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32862 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32863 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32864 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32865 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32866 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32867 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32868 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32869 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32870 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32871 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32872 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32873 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32874 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32875 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32876 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32877 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32878 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32879 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32880 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32881 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32882 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32883 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32884 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32885 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32886 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32887 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32888 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32889 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32890 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32891 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32892 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32893 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32894 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32895 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32896 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32897 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32898 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32899 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32900 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32901 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32902 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32903 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32904 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32905 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32906 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32907 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32908 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32909 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32910 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32911 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32912 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32913 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32914 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32915 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32916 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32917 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32918 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32919 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32920 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32921 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32922 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32923 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32924 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32925 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32926 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32927 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32928 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32929 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32930 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32931 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32932 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32933 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32934 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32935 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32936 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32937 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32938 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32939 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32940 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32941 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32942 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32943 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32944 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32945 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32946 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32947 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32948 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32949 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32950 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32951 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32952 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32953 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32954 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32955 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32956 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32957 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32958 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32959 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32960 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32961 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32962 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32963 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32964 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32965 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32966 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32967 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32968 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32969 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32970 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32971 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32972 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32973 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32974 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32975 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32976 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32977 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32978 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32979 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32980 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32981 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32982 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32983 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32984 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32985 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32986 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32987 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32988 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32989 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32990 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32991 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			32992 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			32993 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32994 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32995 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32996 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32997 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32998 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			32999 => [
				'validator'                => new IsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
