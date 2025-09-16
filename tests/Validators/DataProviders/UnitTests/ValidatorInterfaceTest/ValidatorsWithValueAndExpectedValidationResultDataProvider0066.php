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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0066 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			66000 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66001 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66002 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66003 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66004 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66005 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66006 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66007 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66008 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66009 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66010 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66011 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66012 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66013 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66014 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66015 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66016 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66017 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66018 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66019 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66020 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66021 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66022 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66023 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66024 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66025 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66026 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66027 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66028 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66029 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66030 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66031 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66032 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66033 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66034 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66035 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66036 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66037 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66038 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66039 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66040 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66041 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66042 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66043 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66044 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66045 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66046 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66047 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66048 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66049 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66050 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66051 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66052 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66053 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66054 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66055 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66056 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66057 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66058 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66059 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66060 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66061 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66062 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66063 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66064 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66065 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66066 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66067 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66068 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66069 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66070 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66071 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66072 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66073 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66074 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66075 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66076 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66077 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66078 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66079 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66080 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66081 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66082 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66083 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66084 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66085 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66086 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66087 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66088 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66089 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66090 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66091 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66092 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66093 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66094 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66095 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66096 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66097 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66098 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66099 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66100 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66101 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66102 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66103 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66104 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66105 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66106 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66107 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66108 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66109 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66110 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66111 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66112 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66113 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66114 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66115 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66116 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66117 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66118 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66119 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66120 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66121 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66122 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66123 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66124 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66125 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66126 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66127 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66128 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66129 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66130 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66131 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66132 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66133 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66134 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66135 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66136 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66137 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66138 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66139 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66140 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66141 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66142 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66143 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66144 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66145 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66146 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66147 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66148 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66149 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66150 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66151 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66152 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66153 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66154 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66155 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66156 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66157 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66158 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66159 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66160 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66161 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66162 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66163 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66164 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66165 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66166 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66167 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66168 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66169 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66170 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66171 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66172 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66173 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66174 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66175 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66176 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66177 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66178 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66179 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66180 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66181 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66182 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66183 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66184 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66185 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66186 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66187 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66188 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66189 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66190 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66191 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66192 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66193 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66194 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66195 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66196 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66197 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66198 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66199 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66200 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66201 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66202 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66203 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66204 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66205 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66206 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66207 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66208 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66209 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66210 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66211 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66212 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66213 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66214 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66215 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66216 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66217 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66218 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66219 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66220 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66221 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66222 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66223 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66224 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66225 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66226 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66227 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66228 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66229 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66230 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66231 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66232 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66233 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66234 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66235 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66236 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66237 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66238 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66239 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66240 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66241 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66242 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66243 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66244 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66245 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66246 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66247 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66248 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66249 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66250 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66251 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66252 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66253 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66254 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66255 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66256 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66257 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66258 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66259 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66260 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66261 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66262 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66263 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66264 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66265 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66266 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66267 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66268 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66269 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66270 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66271 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66272 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66273 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66274 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66275 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66276 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66277 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66278 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66279 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66280 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66281 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66282 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66283 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66284 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66285 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66286 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66287 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66288 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66289 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66290 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66291 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66292 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66293 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66294 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66295 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66296 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66297 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66298 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66299 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66300 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66301 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66302 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66303 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66304 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66305 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66306 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66307 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66308 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66309 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66310 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66311 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66312 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66313 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66314 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66315 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66316 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66317 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66318 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66319 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66320 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66321 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66322 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66323 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66324 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66325 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66326 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66327 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66328 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66329 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66330 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66331 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66332 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66333 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66334 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66335 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66336 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66337 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66338 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66339 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66340 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66341 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66342 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66343 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66344 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66345 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66346 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66347 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66348 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66349 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66350 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66351 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66352 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66353 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66354 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66355 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66356 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66357 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66358 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66359 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66360 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66361 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66362 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66363 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66364 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66365 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66366 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66367 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66368 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66369 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66370 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66371 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66372 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66373 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66374 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66375 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66376 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66377 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66378 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66379 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66380 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66381 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66382 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66383 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66384 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66385 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66386 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66387 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66388 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66389 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66390 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66391 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66392 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66393 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66394 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66395 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66396 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66397 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66398 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66399 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66400 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66401 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66402 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66403 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66404 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66405 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66406 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66407 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66408 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66409 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66410 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66411 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66412 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66413 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66414 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66415 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66416 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66417 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66418 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66419 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66420 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66421 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66422 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66423 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66424 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66425 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66426 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66427 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66428 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66429 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66430 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66431 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66432 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66433 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66434 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66435 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66436 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66437 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66438 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66439 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66440 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66441 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66442 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66443 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66444 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66445 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66446 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66447 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66448 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66449 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66450 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66451 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66452 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66453 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66454 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66455 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66456 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66457 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66458 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66459 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66460 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66461 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66462 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66463 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66464 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66465 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66466 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66467 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66468 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66469 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66470 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66471 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66472 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66473 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66474 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66475 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66476 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66477 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66478 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66479 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66480 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66481 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66482 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66483 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66484 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66485 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66486 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66487 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66488 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66489 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66490 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66491 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66492 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66493 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66494 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66495 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66496 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66497 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66498 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66499 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66500 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66501 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66502 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66503 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66504 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66505 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66506 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66507 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66508 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66509 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66510 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66511 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66512 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66513 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66514 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66515 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66516 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66517 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66518 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66519 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66520 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66521 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66522 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66523 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66524 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66525 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66526 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66527 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66528 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66529 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66530 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66531 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66532 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66533 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66534 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66535 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66536 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66537 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66538 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66539 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66540 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66541 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66542 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66543 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66544 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66545 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66546 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66547 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66548 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66549 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66550 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66551 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66552 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66553 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66554 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66555 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66556 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66557 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66558 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66559 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66560 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66561 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66562 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66563 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66564 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66565 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66566 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66567 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66568 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66569 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66570 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66571 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66572 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66573 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66574 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66575 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66576 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66577 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66578 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66579 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66580 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66581 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66582 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66583 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66584 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66585 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66586 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66587 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66588 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66589 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66590 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66591 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66592 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66593 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66594 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66595 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66596 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66597 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66598 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66599 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66600 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66601 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66602 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66603 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66604 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66605 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66606 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66607 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66608 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66609 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66610 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66611 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66612 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66613 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66614 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66615 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66616 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66617 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66618 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66619 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66620 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66621 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66622 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66623 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66624 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66625 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66626 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66627 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66628 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66629 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66630 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66631 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66632 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66633 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66634 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66635 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66636 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66637 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66638 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66639 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66640 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66641 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66642 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66643 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66644 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66645 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66646 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66647 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66648 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66649 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66650 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66651 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66652 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66653 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66654 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66655 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66656 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66657 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66658 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66659 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66660 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66661 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66662 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66663 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66664 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66665 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66666 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66667 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66668 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66669 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66670 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66671 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66672 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66673 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66674 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66675 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66676 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66677 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66678 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66679 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66680 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66681 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66682 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66683 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66684 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66685 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66686 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66687 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66688 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66689 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66690 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66691 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66692 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66693 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66694 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66695 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66696 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66697 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66698 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66699 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66700 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66701 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66702 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66703 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66704 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66705 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66706 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66707 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66708 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66709 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66710 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66711 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66712 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66713 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66714 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66715 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66716 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66717 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66718 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66719 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66720 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66721 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66722 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66723 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66724 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66725 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66726 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66727 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66728 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66729 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66730 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66731 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66732 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66733 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66734 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66735 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66736 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66737 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66738 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66739 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66740 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66741 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66742 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66743 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66744 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66745 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66746 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66747 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66748 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66749 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66750 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66751 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66752 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66753 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66754 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66755 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66756 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66757 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66758 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66759 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66760 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66761 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66762 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66763 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66764 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66765 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66766 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66767 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66768 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66769 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66770 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66771 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66772 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66773 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66774 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66775 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66776 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66777 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66778 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66779 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66780 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66781 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66782 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66783 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66784 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66785 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66786 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66787 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66788 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66789 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66790 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66791 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66792 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66793 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66794 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66795 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66796 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66797 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66798 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66799 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66800 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66801 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66802 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66803 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66804 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66805 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66806 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66807 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66808 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66809 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66810 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66811 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66812 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66813 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66814 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66815 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66816 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66817 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66818 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66819 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66820 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66821 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66822 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66823 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66824 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66825 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66826 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66827 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66828 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66829 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66830 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66831 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66832 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66833 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66834 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66835 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66836 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66837 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66838 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66839 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66840 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66841 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66842 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66843 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66844 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66845 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66846 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66847 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66848 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66849 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66850 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66851 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66852 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66853 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66854 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66855 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66856 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66857 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66858 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66859 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66860 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66861 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66862 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66863 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66864 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66865 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66866 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66867 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66868 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66869 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66870 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66871 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66872 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66873 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66874 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66875 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66876 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66877 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66878 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66879 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66880 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66881 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66882 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66883 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66884 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66885 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66886 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66887 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66888 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66889 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66890 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66891 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66892 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66893 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66894 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66895 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66896 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66897 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66898 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66899 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66900 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66901 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66902 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66903 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66904 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66905 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66906 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66907 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66908 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66909 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66910 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66911 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66912 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66913 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66914 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66915 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66916 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66917 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66918 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66919 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66920 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66921 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66922 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66923 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66924 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66925 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66926 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66927 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66928 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66929 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66930 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66931 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66932 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66933 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66934 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66935 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66936 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66937 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66938 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66939 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66940 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66941 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66942 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66943 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66944 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66945 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66946 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66947 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66948 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66949 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66950 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66951 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66952 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66953 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66954 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66955 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66956 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66957 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66958 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66959 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66960 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66961 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66962 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66963 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66964 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66965 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66966 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66967 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66968 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66969 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66970 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66971 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66972 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66973 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66974 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66975 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66976 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66977 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66978 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66979 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66980 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66981 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66982 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66983 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66984 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66985 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66986 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66987 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66988 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66989 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66990 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66991 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66992 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66993 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66994 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			66995 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66996 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66997 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66998 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			66999 => [
				'validator'                => new NullableIsInArrayValidator( Values::BOOLEAN_INTEGER_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
