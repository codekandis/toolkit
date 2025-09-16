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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0025 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			25000 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25001 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25002 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25003 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25004 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25005 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25006 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25007 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25008 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25009 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25010 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25011 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25012 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25013 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25014 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25015 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25016 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25017 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25018 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25019 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25020 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25021 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25022 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25023 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25024 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25025 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25026 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25027 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25028 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25029 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25030 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25031 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25032 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25033 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25034 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25035 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25036 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25037 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25038 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25039 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25040 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25041 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25042 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25043 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25044 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25045 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25046 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25047 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25048 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25049 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25050 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25051 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25052 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25053 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25054 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25055 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25056 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25057 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25058 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25059 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25060 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25061 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25062 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25063 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25064 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25065 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25066 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25067 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25068 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25069 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25070 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25071 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25072 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25073 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25074 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25075 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25076 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25077 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25078 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25079 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25080 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25081 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25082 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25083 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25084 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25085 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25086 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25087 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25088 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25089 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25090 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25091 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25092 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25093 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25094 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25095 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25096 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25097 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25098 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25099 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25100 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25101 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25102 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25103 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25104 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25105 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25106 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25107 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25108 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25109 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25110 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25111 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25112 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25113 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25114 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25115 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25116 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25117 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25118 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25119 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25120 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25121 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25122 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25123 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25124 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25125 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25126 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25127 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25128 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25129 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25130 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25131 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25132 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25133 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25134 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25135 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25136 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25137 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25138 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25139 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25140 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25141 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25142 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25143 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25144 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25145 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25146 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25147 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25148 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25149 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25150 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25151 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25152 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25153 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25154 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25155 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25156 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25157 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25158 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25159 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25160 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25161 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25162 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25163 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25164 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25165 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25166 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25167 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25168 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25169 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25170 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25171 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25172 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25173 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25174 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25175 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25176 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25177 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25178 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25179 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25180 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25181 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25182 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25183 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25184 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25185 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25186 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25187 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25188 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25189 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25190 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25191 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25192 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25193 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25194 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25195 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25196 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25197 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25198 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25199 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25200 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25201 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25202 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25203 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25204 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25205 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25206 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25207 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25208 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25209 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25210 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25211 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25212 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25213 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25214 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25215 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25216 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25217 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25218 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25219 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25220 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25221 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25222 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25223 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25224 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25225 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25226 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25227 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25228 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25229 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25230 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25231 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25232 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25233 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25234 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25235 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25236 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25237 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25238 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25239 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25240 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25241 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25242 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25243 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25244 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25245 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25246 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25247 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25248 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25249 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25250 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25251 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25252 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25253 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25254 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25255 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25256 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25257 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25258 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25259 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25260 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25261 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25262 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25263 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25264 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25265 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25266 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25267 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25268 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25269 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25270 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25271 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25272 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25273 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25274 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25275 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25276 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25277 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25278 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25279 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25280 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25281 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25282 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25283 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25284 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25285 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25286 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25287 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25288 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25289 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25290 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25291 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25292 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25293 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25294 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25295 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25296 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25297 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25298 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25299 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25300 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25301 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25302 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25303 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25304 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25305 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25306 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25307 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25308 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25309 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25310 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25311 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25312 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25313 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25314 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25315 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25316 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25317 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25318 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25319 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25320 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25321 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25322 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25323 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25324 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25325 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25326 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25327 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25328 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25329 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25330 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25331 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25332 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25333 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25334 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25335 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25336 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25337 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25338 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25339 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25340 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25341 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25342 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25343 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25344 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25345 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25346 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25347 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25348 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25349 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25350 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25351 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25352 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25353 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25354 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25355 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25356 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25357 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25358 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25359 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25360 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25361 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25362 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25363 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25364 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25365 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25366 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25367 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25368 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25369 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25370 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25371 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25372 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25373 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25374 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25375 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25376 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25377 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25378 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25379 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25380 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25381 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25382 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25383 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25384 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25385 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25386 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25387 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25388 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25389 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25390 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25391 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25392 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25393 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25394 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25395 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25396 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25397 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25398 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25399 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25400 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25401 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25402 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25403 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25404 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25405 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25406 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25407 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25408 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25409 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25410 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25411 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25412 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25413 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25414 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25415 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25416 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25417 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25418 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25419 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25420 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25421 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25422 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25423 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25424 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25425 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25426 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25427 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25428 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25429 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25430 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25431 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25432 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25433 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25434 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25435 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25436 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25437 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25438 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25439 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25440 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25441 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25442 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25443 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25444 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25445 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25446 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25447 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25448 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25449 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25450 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25451 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25452 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25453 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25454 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25455 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25456 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25457 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25458 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25459 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25460 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25461 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25462 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25463 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25464 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25465 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25466 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25467 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25468 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25469 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25470 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25471 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25472 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25473 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25474 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25475 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25476 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25477 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25478 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25479 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25480 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25481 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25482 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25483 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25484 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25485 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25486 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25487 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25488 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25489 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25490 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25491 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25492 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25493 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25494 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25495 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25496 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25497 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25498 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25499 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25500 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25501 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25502 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25503 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25504 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25505 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25506 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25507 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25508 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25509 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25510 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25511 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25512 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25513 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25514 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25515 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25516 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25517 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25518 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25519 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25520 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25521 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25522 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25523 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25524 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25525 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25526 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25527 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25528 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25529 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25530 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25531 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25532 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25533 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25534 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25535 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25536 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25537 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25538 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25539 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25540 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25541 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25542 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25543 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25544 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25545 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25546 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25547 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25548 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25549 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25550 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25551 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25552 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25553 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25554 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25555 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25556 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25557 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25558 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25559 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25560 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25561 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25562 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25563 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25564 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25565 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25566 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25567 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25568 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25569 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25570 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25571 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25572 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25573 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25574 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25575 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25576 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25577 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25578 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25579 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25580 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25581 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25582 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25583 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25584 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25585 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25586 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25587 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25588 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25589 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25590 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25591 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25592 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25593 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25594 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25595 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25596 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25597 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25598 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25599 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25600 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25601 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25602 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25603 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25604 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25605 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25606 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25607 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25608 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25609 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25610 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25611 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25612 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25613 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25614 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25615 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25616 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25617 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25618 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25619 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25620 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25621 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25622 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25623 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25624 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25625 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25626 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25627 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25628 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25629 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25630 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25631 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25632 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25633 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25634 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25635 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25636 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25637 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25638 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25639 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25640 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25641 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25642 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25643 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25644 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25645 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25646 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25647 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25648 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25649 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25650 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25651 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25652 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25653 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25654 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25655 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25656 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25657 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25658 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25659 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25660 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25661 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25662 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25663 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25664 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25665 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25666 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25667 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25668 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25669 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25670 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25671 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25672 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25673 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25674 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25675 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25676 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25677 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25678 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25679 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25680 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25681 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25682 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25683 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25684 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25685 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25686 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25687 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25688 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25689 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25690 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25691 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25692 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25693 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25694 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25695 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25696 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25697 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25698 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25699 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25700 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25701 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25702 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25703 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25704 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25705 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25706 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25707 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25708 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25709 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25710 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25711 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25712 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25713 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25714 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25715 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25716 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25717 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25718 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25719 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25720 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25721 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25722 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25723 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25724 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25725 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25726 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25727 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25728 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25729 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25730 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25731 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25732 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25733 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25734 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25735 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25736 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25737 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25738 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25739 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25740 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25741 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25742 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25743 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25744 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25745 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25746 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25747 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25748 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25749 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25750 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25751 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25752 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25753 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25754 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25755 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25756 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25757 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25758 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25759 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25760 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25761 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25762 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25763 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25764 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25765 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25766 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25767 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25768 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25769 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25770 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25771 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25772 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25773 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25774 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25775 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25776 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25777 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25778 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25779 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25780 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25781 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25782 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25783 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25784 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25785 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25786 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25787 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25788 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25789 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25790 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25791 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25792 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25793 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25794 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25795 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25796 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25797 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25798 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25799 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25800 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25801 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25802 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25803 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25804 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25805 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25806 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25807 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25808 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25809 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25810 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25811 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25812 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25813 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25814 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25815 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25816 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25817 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25818 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25819 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25820 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25821 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25822 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25823 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25824 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25825 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25826 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25827 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25828 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25829 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25830 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25831 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25832 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25833 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25834 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25835 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25836 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25837 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25838 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25839 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25840 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25841 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25842 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25843 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25844 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25845 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25846 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25847 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25848 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25849 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25850 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25851 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25852 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25853 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25854 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25855 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25856 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25857 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25858 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25859 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25860 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25861 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25862 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25863 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25864 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25865 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25866 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25867 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25868 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25869 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25870 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25871 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25872 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25873 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25874 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25875 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25876 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25877 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25878 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25879 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25880 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25881 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25882 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25883 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25884 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25885 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25886 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25887 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25888 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25889 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25890 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25891 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25892 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25893 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25894 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25895 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25896 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25897 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25898 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25899 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25900 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25901 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25902 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25903 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25904 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25905 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25906 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25907 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25908 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25909 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25910 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25911 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25912 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25913 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25914 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25915 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25916 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25917 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25918 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25919 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25920 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25921 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25922 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25923 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25924 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			25925 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25926 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25927 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25928 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25929 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25930 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25931 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25932 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25933 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25934 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25935 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25936 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25937 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25938 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25939 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25940 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25941 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25942 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25943 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25944 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25945 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25946 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25947 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25948 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25949 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25950 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25951 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25952 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25953 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25954 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25955 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25956 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25957 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25958 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25959 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25960 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25961 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25962 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25963 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25964 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25965 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25966 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25967 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25968 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25969 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25970 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25971 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25972 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25973 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25974 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25975 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25976 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25977 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25978 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25979 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25980 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25981 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25982 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25983 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25984 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25985 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25986 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25987 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25988 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25989 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25990 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25991 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25992 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25993 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25994 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25995 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25996 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25997 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25998 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			25999 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_OR_CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
