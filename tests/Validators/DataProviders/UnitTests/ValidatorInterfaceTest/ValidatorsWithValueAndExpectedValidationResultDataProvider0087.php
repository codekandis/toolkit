<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsInArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0087 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			87000 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87001 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87002 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87003 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87004 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87005 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87006 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87007 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87008 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87009 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87010 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87011 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87012 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87013 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87014 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87015 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87016 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87017 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87018 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87019 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87020 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87021 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87022 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87023 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87024 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87025 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87026 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87027 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87028 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87029 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87030 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87031 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87032 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87033 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87034 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87035 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87036 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87037 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87038 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87039 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87040 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87041 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87042 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87043 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87044 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87045 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87046 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87047 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87048 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87049 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87050 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87051 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87052 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87053 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87054 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87055 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87056 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87057 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87058 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87059 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87060 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87061 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87062 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87063 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87064 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87065 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87066 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87067 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87068 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87069 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87070 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87071 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87072 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87073 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87074 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87075 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87076 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87077 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87078 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87079 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87080 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87081 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87082 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87083 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87084 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87085 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87086 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87087 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87088 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87089 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87090 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87091 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87092 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87093 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87094 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87095 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87096 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87097 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87098 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87099 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87100 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87101 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87102 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87103 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87104 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87105 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87106 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87107 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87108 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87109 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87110 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87111 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87112 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87113 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87114 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87115 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87116 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87117 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87118 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87119 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87120 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87121 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87122 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87123 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87124 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87125 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87126 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87127 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87128 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87129 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87130 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87131 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87132 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87133 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87134 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87135 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87136 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87137 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87138 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87139 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87140 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87141 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87142 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87143 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87144 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87145 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87146 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87147 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87148 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87149 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87150 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87151 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87152 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87153 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87154 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87155 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87156 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87157 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87158 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87159 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87160 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87161 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87162 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87163 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87164 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87165 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87166 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87167 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87168 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87169 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87170 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87171 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87172 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87173 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87174 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87175 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87176 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87177 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87178 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87179 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87180 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87181 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87182 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87183 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87184 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87185 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87186 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87187 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87188 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87189 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87190 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87191 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87192 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87193 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87194 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87195 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87196 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87197 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87198 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87199 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87200 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87201 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87202 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87203 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87204 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87205 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87206 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87207 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87208 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87209 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87210 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87211 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87212 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87213 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87214 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87215 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87216 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87217 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87218 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87219 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87220 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87221 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87222 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87223 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87224 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87225 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87226 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87227 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87228 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87229 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87230 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87231 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87232 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87233 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87234 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87235 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87236 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87237 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87238 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87239 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87240 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87241 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87242 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87243 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87244 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87245 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87246 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87247 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87248 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87249 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87250 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87251 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87252 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87253 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87254 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87255 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87256 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87257 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87258 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87259 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87260 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87261 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87262 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87263 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87264 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87265 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87266 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87267 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87268 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87269 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87270 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87271 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87272 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87273 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87274 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87275 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87276 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87277 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87278 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87279 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87280 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87281 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87282 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87283 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87284 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87285 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87286 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87287 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87288 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87289 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87290 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87291 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87292 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87293 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87294 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87295 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87296 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87297 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87298 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87299 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87300 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87301 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87302 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87303 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87304 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87305 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87306 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87307 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87308 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87309 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87310 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87311 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87312 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87313 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87314 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87315 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87316 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87317 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87318 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87319 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87320 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87321 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87322 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87323 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87324 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87325 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87326 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87327 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87328 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87329 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87330 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87331 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87332 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87333 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87334 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87335 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87336 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87337 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87338 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87339 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87340 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87341 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87342 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87343 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87344 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87345 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87346 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87347 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87348 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87349 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87350 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87351 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87352 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87353 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87354 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87355 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87356 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87357 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87358 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87359 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87360 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87361 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87362 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87363 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87364 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87365 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87366 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87367 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87368 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87369 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87370 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87371 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87372 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87373 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87374 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87375 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87376 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87377 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87378 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87379 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87380 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87381 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87382 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87383 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87384 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87385 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87386 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87387 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87388 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87389 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87390 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87391 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87392 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87393 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87394 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87395 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87396 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87397 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87398 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87399 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87400 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87401 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87402 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87403 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87404 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87405 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87406 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87407 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87408 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87409 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87410 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87411 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87412 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87413 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87414 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87415 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87416 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87417 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87418 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87419 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87420 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87421 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87422 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87423 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87424 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87425 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87426 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87427 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87428 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87429 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87430 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87431 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87432 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87433 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87434 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87435 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87436 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87437 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87438 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87439 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87440 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87441 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87442 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87443 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87444 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87445 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87446 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87447 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87448 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87449 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87450 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87451 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87452 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87453 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87454 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87455 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87456 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87457 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87458 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87459 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87460 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87461 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87462 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87463 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87464 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87465 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87466 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87467 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87468 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87469 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87470 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87471 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87472 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87473 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87474 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87475 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87476 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87477 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87478 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87479 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87480 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87481 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87482 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87483 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87484 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87485 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87486 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87487 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87488 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87489 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87490 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87491 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87492 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87493 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87494 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87495 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87496 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87497 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87498 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87499 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87500 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87501 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87502 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87503 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87504 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87505 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87506 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87507 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87508 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87509 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87510 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87511 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87512 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87513 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87514 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87515 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87516 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87517 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87518 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87519 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87520 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87521 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87522 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87523 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87524 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87525 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87526 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87527 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87528 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87529 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87530 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87531 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87532 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87533 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87534 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87535 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87536 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87537 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87538 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87539 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87540 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87541 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87542 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87543 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87544 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87545 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87546 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87547 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87548 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87549 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87550 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87551 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87552 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87553 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87554 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87555 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87556 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87557 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87558 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87559 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87560 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87561 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87562 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87563 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87564 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87565 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87566 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87567 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87568 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87569 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87570 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87571 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87572 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87573 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87574 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87575 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87576 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87577 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87578 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87579 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87580 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87581 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87582 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87583 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87584 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87585 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87586 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87587 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87588 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87589 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87590 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87591 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87592 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87593 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87594 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87595 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87596 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87597 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87598 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87599 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87600 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87601 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87602 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87603 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87604 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87605 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87606 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87607 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87608 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87609 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87610 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87611 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87612 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87613 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87614 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87615 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87616 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87617 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87618 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87619 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87620 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87621 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87622 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87623 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87624 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87625 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87626 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87627 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87628 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87629 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87630 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87631 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87632 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87633 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87634 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87635 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87636 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87637 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87638 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87639 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87640 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87641 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87642 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87643 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87644 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87645 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87646 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87647 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87648 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87649 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87650 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87651 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87652 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87653 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87654 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87655 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87656 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87657 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87658 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87659 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87660 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87661 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87662 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87663 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87664 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87665 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87666 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87667 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87668 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87669 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87670 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87671 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87672 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87673 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87674 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87675 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87676 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87677 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87678 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87679 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87680 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87681 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87682 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87683 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87684 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87685 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87686 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87687 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87688 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87689 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87690 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87691 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87692 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87693 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87694 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87695 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87696 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87697 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87698 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87699 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87700 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87701 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87702 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87703 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87704 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87705 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87706 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87707 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87708 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87709 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87710 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87711 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87712 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87713 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87714 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87715 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87716 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87717 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87718 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87719 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87720 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87721 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87722 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87723 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87724 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87725 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87726 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87727 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87728 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87729 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87730 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87731 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87732 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87733 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87734 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87735 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87736 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87737 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87738 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87739 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87740 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87741 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87742 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87743 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87744 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87745 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87746 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87747 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87748 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87749 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87750 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87751 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87752 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87753 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87754 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87755 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87756 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87757 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87758 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87759 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87760 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87761 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87762 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87763 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87764 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87765 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87766 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87767 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87768 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87769 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87770 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87771 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87772 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87773 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87774 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87775 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87776 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87777 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87778 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87779 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87780 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87781 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87782 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87783 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87784 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87785 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87786 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87787 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87788 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87789 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87790 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87791 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87792 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87793 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87794 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87795 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87796 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87797 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87798 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87799 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87800 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87801 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87802 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87803 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87804 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87805 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87806 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87807 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87808 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87809 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87810 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87811 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87812 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87813 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87814 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87815 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87816 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87817 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87818 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87819 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87820 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87821 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87822 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87823 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87824 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87825 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87826 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87827 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87828 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87829 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87830 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87831 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87832 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87833 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87834 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87835 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87836 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87837 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87838 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87839 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87840 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87841 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87842 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87843 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87844 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87845 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87846 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87847 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87848 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87849 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87850 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87851 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87852 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87853 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87854 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87855 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87856 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87857 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87858 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87859 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87860 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87861 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87862 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87863 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87864 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87865 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87866 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87867 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87868 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87869 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87870 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87871 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87872 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87873 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87874 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87875 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87876 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87877 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87878 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87879 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87880 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87881 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87882 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87883 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87884 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87885 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87886 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87887 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87888 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87889 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87890 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87891 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87892 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87893 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87894 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87895 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87896 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87897 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87898 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87899 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87900 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87901 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87902 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87903 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87904 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87905 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87906 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87907 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87908 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87909 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87910 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87911 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87912 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87913 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87914 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87915 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87916 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87917 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87918 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87919 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87920 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87921 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87922 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87923 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87924 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87925 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87926 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87927 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87928 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87929 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87930 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87931 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87932 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87933 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87934 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87935 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87936 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87937 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87938 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87939 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87940 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87941 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87942 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87943 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87944 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87945 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87946 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87947 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87948 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87949 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87950 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87951 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87952 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87953 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87954 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87955 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87956 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87957 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87958 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87959 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87960 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87961 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87962 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87963 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87964 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87965 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87966 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87967 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87968 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87969 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87970 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87971 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87972 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87973 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87974 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87975 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87976 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87977 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87978 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87979 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87980 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87981 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87982 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87983 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87984 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			87985 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87986 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87987 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87988 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87989 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87990 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87991 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87992 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87993 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87994 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87995 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87996 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87997 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87998 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			87999 => [
				'validator'                => new NullableIsInArrayValidator(
					Values::createDateIntervalObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
