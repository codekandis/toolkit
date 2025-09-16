<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0030 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			30000 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30001 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30002 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30003 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30004 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30005 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30006 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30007 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30008 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30009 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30010 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30011 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30012 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30013 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30014 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30015 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30016 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30017 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30018 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30019 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30020 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30021 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30022 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30023 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30024 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30025 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30026 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30027 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30028 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30029 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30030 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30031 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30032 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30033 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30034 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30035 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30036 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30037 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30038 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30039 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30040 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30041 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30042 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30043 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30044 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30045 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30046 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30047 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30048 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30049 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30050 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30051 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30052 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30053 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30054 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30055 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30056 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30057 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30058 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30059 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30060 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30061 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30062 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30063 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30064 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30065 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30066 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30067 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30068 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30069 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30070 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30071 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30072 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30073 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30074 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30075 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30076 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30077 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30078 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30079 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30080 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30081 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30082 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30083 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30084 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30085 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30086 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30087 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30088 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30089 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30090 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30091 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30092 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30093 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30094 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30095 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30096 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30097 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30098 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30099 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30100 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30101 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30102 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30103 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30104 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30105 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30106 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30107 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30108 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30109 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30110 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30111 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30112 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30113 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30114 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30115 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30116 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30117 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30118 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30119 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30120 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30121 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30122 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30123 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30124 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30125 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30126 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30127 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30128 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30129 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			30130 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30131 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30132 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30133 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30134 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30135 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30136 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30137 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30138 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30139 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30140 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30141 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30142 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30143 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30144 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30145 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30146 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30147 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30148 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30149 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30150 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30151 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30152 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30153 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30154 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30155 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30156 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30157 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30158 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30159 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30160 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30161 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30162 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30163 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30164 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30165 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30166 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30167 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30168 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30169 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30170 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30171 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30172 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30173 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30174 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30175 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30176 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30177 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30178 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30179 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30180 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30181 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30182 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30183 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30184 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30185 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30186 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30187 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30188 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30189 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30190 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30191 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30192 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30193 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30194 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30195 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30196 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30197 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30198 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30199 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30200 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30201 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30202 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30203 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30204 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30205 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30206 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30207 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30208 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30209 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30210 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30211 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30212 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30213 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30214 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30215 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30216 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30217 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30218 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30219 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30220 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30221 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30222 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30223 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30224 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30225 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30226 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30227 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30228 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30229 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30230 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30231 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30232 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30233 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30234 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30235 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30236 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30237 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30238 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30239 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30240 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30241 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30242 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30243 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30244 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30245 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30246 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30247 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30248 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30249 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30250 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30251 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30252 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30253 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30254 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30255 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30256 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30257 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30258 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30259 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30260 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30261 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30262 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30263 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30264 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30265 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30266 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30267 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30268 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30269 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30270 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30271 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30272 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30273 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30274 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30275 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30276 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30277 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30278 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30279 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30280 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30281 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30282 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30283 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30284 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30285 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30286 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30287 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30288 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30289 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30290 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30291 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30292 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30293 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30294 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30295 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30296 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30297 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30298 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30299 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30300 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30301 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30302 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30303 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30304 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30305 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30306 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30307 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30308 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30309 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30310 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30311 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30312 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30313 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30314 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30315 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30316 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30317 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30318 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30319 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30320 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30321 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30322 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30323 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30324 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30325 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30326 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30327 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30328 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30329 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30330 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30331 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30332 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30333 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30334 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30335 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30336 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30337 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30338 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			30339 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30340 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30341 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30342 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30343 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30344 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30345 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30346 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30347 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30348 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30349 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30350 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30351 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30352 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30353 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30354 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30355 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30356 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30357 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30358 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30359 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30360 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30361 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30362 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30363 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30364 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30365 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30366 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30367 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30368 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30369 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30370 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30371 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30372 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30373 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30374 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30375 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30376 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30377 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30378 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30379 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30380 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30381 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30382 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30383 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30384 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30385 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30386 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30387 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30388 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30389 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30390 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30391 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30392 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30393 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30394 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30395 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30396 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30397 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30398 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30399 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30400 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30401 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30402 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30403 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30404 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30405 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30406 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30407 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30408 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30409 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30410 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30411 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30412 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30413 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30414 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30415 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30416 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30417 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30418 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30419 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30420 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30421 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30422 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30423 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30424 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30425 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30426 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30427 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30428 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30429 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30430 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30431 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30432 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30433 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30434 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30435 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30436 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30437 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30438 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30439 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30440 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30441 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30442 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30443 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30444 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30445 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30446 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30447 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30448 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30449 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30450 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30451 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30452 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30453 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30454 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30455 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30456 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30457 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30458 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30459 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30460 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30461 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30462 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30463 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30464 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30465 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30466 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30467 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30468 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30469 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30470 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30471 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30472 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30473 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30474 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30475 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30476 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30477 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30478 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30479 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30480 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30481 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30482 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30483 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30484 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30485 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30486 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30487 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30488 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30489 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30490 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30491 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30492 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30493 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30494 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30495 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30496 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30497 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30498 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30499 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30500 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30501 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30502 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30503 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30504 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30505 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30506 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30507 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30508 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30509 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30510 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30511 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30512 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30513 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30514 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30515 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30516 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30517 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30518 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30519 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30520 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30521 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30522 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30523 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30524 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30525 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30526 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30527 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30528 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30529 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30530 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30531 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30532 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30533 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30534 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30535 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30536 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30537 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30538 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30539 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30540 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30541 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30542 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30543 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30544 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30545 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			30546 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			30547 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30548 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30549 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30550 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30551 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30552 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30553 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30554 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30555 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30556 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30557 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30558 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30559 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30560 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30561 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30562 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30563 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30564 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30565 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30566 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30567 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30568 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30569 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30570 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30571 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30572 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30573 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30574 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30575 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30576 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30577 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30578 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30579 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30580 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30581 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30582 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30583 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30584 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30585 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30586 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30587 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30588 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30589 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30590 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30591 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30592 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30593 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30594 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30595 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30596 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30597 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30598 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30599 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30600 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30601 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30602 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30603 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30604 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30605 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30606 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30607 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30608 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30609 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30610 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30611 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30612 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30613 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30614 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30615 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30616 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30617 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30618 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30619 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30620 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30621 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30622 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30623 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30624 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30625 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30626 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30627 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30628 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30629 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30630 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30631 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30632 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30633 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30634 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30635 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30636 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30637 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30638 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30639 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30640 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30641 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30642 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30643 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30644 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30645 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30646 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30647 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30648 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30649 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30650 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30651 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30652 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30653 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30654 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30655 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30656 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30657 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30658 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30659 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30660 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30661 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30662 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30663 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30664 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30665 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30666 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30667 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30668 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30669 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30670 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30671 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30672 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30673 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30674 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30675 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30676 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30677 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30678 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30679 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30680 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30681 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30682 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30683 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30684 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30685 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30686 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30687 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30688 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30689 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30690 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30691 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30692 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30693 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30694 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30695 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30696 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30697 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30698 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30699 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30700 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30701 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30702 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30703 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30704 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30705 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30706 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30707 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30708 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30709 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30710 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30711 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30712 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30713 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30714 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30715 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30716 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30717 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30718 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30719 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30720 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30721 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30722 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30723 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30724 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30725 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30726 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30727 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30728 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30729 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30730 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30731 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30732 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30733 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30734 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30735 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30736 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30737 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30738 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30739 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30740 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30741 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30742 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30743 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30744 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30745 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30746 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30747 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30748 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30749 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30750 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30751 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30752 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30753 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			30754 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			30755 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30756 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30757 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30758 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30759 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30760 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30761 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30762 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30763 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30764 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30765 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30766 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30767 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30768 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30769 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30770 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30771 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30772 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30773 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30774 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30775 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30776 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30777 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30778 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30779 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30780 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30781 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30782 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30783 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30784 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30785 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30786 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30787 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30788 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30789 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30790 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30791 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30792 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30793 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30794 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30795 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30796 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30797 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30798 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30799 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30800 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30801 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30802 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30803 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30804 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30805 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30806 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30807 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30808 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30809 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30810 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30811 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30812 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30813 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30814 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30815 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30816 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30817 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30818 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30819 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30820 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30821 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30822 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30823 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30824 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30825 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30826 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30827 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30828 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30829 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30830 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30831 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30832 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30833 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30834 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30835 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30836 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30837 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30838 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30839 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30840 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30841 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30842 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30843 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30844 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30845 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30846 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30847 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30848 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30849 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30850 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30851 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30852 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30853 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30854 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30855 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30856 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30857 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30858 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30859 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30860 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30861 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30862 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30863 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30864 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30865 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30866 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30867 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30868 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30869 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30870 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30871 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30872 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30873 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30874 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30875 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30876 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30877 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30878 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30879 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30880 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30881 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30882 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30883 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30884 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30885 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30886 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30887 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30888 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30889 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30890 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30891 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30892 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30893 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30894 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30895 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30896 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30897 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30898 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30899 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30900 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30901 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30902 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30903 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30904 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30905 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30906 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30907 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30908 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30909 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30910 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30911 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30912 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30913 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30914 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30915 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30916 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30917 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30918 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30919 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30920 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30921 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30922 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30923 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30924 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30925 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30926 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30927 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30928 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30929 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30930 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30931 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30932 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30933 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30934 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30935 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30936 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30937 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30938 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30939 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30940 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30941 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30942 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30943 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30944 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30945 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30946 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30947 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30948 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30949 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30950 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30951 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30952 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30953 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30954 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30955 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30956 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30957 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30958 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30959 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30960 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30961 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30962 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30963 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30964 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30965 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30966 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30967 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			30968 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30969 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30970 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30971 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30972 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30973 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30974 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30975 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30976 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30977 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30978 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30979 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30980 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30981 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30982 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30983 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30984 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30985 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30986 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30987 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30988 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30989 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30990 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30991 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30992 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30993 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30994 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30995 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30996 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30997 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30998 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			30999 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateIntervalObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
