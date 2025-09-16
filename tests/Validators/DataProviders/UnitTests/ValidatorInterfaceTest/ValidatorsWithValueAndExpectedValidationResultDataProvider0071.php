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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0071 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			71000 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71001 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71002 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71003 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71004 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71005 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71006 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71007 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71008 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71009 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71010 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71011 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71012 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71013 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71014 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71015 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71016 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71017 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71018 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71019 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71020 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71021 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71022 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71023 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71024 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71025 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71026 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71027 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71028 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71029 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71030 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71031 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71032 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71033 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71034 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71035 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71036 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71037 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71038 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71039 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71040 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71041 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71042 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71043 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71044 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71045 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71046 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71047 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71048 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71049 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71050 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71051 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71052 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71053 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71054 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71055 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71056 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71057 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71058 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71059 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71060 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71061 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71062 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71063 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71064 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71065 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71066 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71067 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71068 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71069 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71070 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71071 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71072 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71073 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71074 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71075 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71076 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71077 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71078 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71079 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71080 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71081 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71082 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71083 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71084 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71085 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71086 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71087 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71088 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71089 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71090 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71091 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71092 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71093 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71094 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71095 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71096 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71097 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71098 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71099 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71100 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71101 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71102 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71103 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71104 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71105 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71106 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71107 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71108 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71109 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71110 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71111 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71112 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71113 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71114 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71115 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71116 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71117 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71118 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71119 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71120 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71121 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71122 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71123 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71124 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71125 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71126 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71127 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71128 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71129 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71130 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71131 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71132 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71133 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71134 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71135 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71136 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71137 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71138 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71139 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71140 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71141 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71142 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71143 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71144 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71145 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71146 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71147 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71148 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71149 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71150 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71151 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71152 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71153 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71154 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71155 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71156 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71157 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71158 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71159 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71160 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71161 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71162 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71163 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71164 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71165 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71166 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71167 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71168 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71169 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71170 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71171 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71172 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71173 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71174 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71175 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71176 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71177 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71178 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71179 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71180 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71181 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71182 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71183 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71184 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71185 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71186 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71187 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71188 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71189 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71190 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71191 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71192 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71193 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71194 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71195 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71196 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71197 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71198 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71199 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71200 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71201 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71202 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71203 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71204 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71205 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71206 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71207 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71208 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71209 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71210 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71211 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71212 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71213 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71214 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71215 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71216 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71217 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71218 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71219 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71220 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71221 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71222 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71223 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71224 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71225 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71226 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71227 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71228 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71229 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71230 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71231 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71232 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71233 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71234 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71235 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71236 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71237 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71238 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71239 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71240 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71241 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71242 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71243 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71244 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71245 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71246 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71247 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71248 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71249 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71250 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71251 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71252 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71253 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71254 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71255 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71256 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71257 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71258 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71259 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71260 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71261 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71262 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71263 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71264 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71265 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71266 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71267 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71268 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71269 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71270 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71271 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71272 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71273 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71274 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71275 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71276 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71277 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71278 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71279 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71280 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71281 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71282 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71283 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71284 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71285 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71286 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71287 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71288 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71289 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71290 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71291 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71292 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71293 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71294 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71295 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71296 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71297 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71298 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71299 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71300 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71301 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71302 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71303 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71304 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71305 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71306 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71307 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71308 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71309 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71310 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71311 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71312 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71313 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71314 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71315 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71316 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71317 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71318 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71319 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71320 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71321 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71322 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71323 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71324 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71325 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71326 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71327 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71328 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71329 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71330 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71331 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71332 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71333 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71334 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71335 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71336 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71337 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71338 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71339 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71340 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71341 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71342 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71343 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71344 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71345 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71346 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71347 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71348 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71349 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71350 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71351 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71352 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71353 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71354 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71355 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71356 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71357 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71358 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71359 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71360 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71361 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71362 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71363 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71364 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71365 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71366 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71367 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71368 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71369 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71370 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71371 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71372 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71373 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71374 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71375 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71376 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71377 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71378 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71379 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71380 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71381 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71382 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71383 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71384 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71385 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71386 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71387 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71388 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71389 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71390 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71391 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71392 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71393 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71394 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71395 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71396 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71397 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71398 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71399 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71400 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71401 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71402 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71403 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71404 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71405 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71406 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71407 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71408 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71409 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71410 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71411 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71412 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71413 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71414 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71415 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71416 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71417 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71418 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71419 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71420 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71421 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71422 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71423 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71424 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71425 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71426 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71427 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71428 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71429 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71430 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71431 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71432 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71433 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71434 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71435 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71436 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71437 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71438 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71439 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71440 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71441 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71442 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71443 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71444 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71445 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71446 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71447 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71448 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71449 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71450 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71451 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71452 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71453 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71454 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71455 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71456 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71457 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71458 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71459 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71460 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71461 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71462 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71463 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71464 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71465 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71466 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71467 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71468 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71469 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71470 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71471 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71472 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71473 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71474 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71475 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71476 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71477 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71478 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71479 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71480 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71481 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71482 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71483 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71484 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71485 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71486 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71487 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71488 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71489 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71490 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71491 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71492 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71493 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71494 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71495 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71496 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71497 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71498 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71499 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71500 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71501 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71502 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71503 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71504 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71505 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71506 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71507 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71508 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71509 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71510 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71511 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71512 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71513 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71514 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71515 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71516 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71517 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71518 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71519 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71520 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71521 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71522 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71523 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71524 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71525 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71526 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71527 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71528 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71529 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71530 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71531 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71532 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71533 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71534 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71535 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71536 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71537 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71538 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71539 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71540 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71541 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71542 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71543 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71544 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71545 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71546 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71547 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71548 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71549 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71550 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71551 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71552 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71553 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71554 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71555 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71556 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71557 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71558 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71559 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71560 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71561 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71562 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71563 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71564 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71565 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71566 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71567 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71568 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71569 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71570 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71571 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71572 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71573 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71574 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71575 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71576 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71577 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71578 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71579 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71580 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71581 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71582 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71583 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71584 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71585 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71586 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71587 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71588 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71589 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71590 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71591 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71592 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71593 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71594 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71595 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71596 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71597 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71598 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71599 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71600 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71601 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71602 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71603 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71604 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71605 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71606 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71607 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71608 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71609 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71610 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71611 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71612 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71613 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71614 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71615 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71616 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71617 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71618 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71619 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71620 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71621 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71622 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71623 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71624 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71625 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71626 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71627 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71628 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71629 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71630 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71631 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71632 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71633 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71634 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71635 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71636 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71637 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71638 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71639 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71640 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71641 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71642 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71643 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71644 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71645 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71646 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71647 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71648 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71649 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71650 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71651 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71652 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71653 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71654 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71655 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71656 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71657 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71658 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71659 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71660 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71661 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71662 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71663 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71664 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71665 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71666 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71667 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71668 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71669 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71670 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71671 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71672 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71673 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71674 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71675 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71676 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71677 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71678 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71679 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71680 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71681 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71682 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71683 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71684 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71685 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71686 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71687 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71688 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71689 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71690 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71691 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71692 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71693 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71694 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71695 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71696 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71697 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71698 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71699 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71700 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71701 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71702 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71703 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71704 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71705 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71706 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71707 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71708 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71709 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71710 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71711 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71712 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71713 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71714 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71715 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71716 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71717 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71718 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71719 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71720 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71721 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71722 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71723 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71724 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71725 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71726 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71727 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71728 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71729 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71730 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71731 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71732 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71733 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71734 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71735 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71736 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71737 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71738 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71739 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71740 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71741 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71742 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71743 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71744 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71745 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71746 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71747 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71748 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71749 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71750 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71751 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71752 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71753 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71754 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71755 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71756 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71757 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71758 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71759 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71760 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71761 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71762 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71763 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71764 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71765 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71766 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71767 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71768 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71769 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71770 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71771 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71772 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71773 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71774 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71775 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71776 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71777 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71778 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71779 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71780 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71781 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71782 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71783 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71784 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71785 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71786 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71787 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71788 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71789 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71790 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71791 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71792 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71793 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71794 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71795 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71796 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71797 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71798 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71799 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71800 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71801 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71802 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71803 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71804 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71805 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71806 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71807 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71808 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71809 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71810 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71811 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71812 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71813 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71814 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71815 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71816 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71817 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71818 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71819 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71820 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71821 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71822 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71823 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71824 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71825 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71826 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71827 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71828 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71829 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71830 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71831 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71832 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71833 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71834 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71835 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71836 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71837 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71838 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71839 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71840 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71841 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71842 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71843 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71844 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71845 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71846 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71847 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71848 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71849 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71850 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71851 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71852 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71853 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71854 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71855 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71856 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71857 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71858 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71859 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71860 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71861 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71862 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71863 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71864 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71865 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71866 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71867 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71868 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71869 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71870 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71871 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71872 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71873 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71874 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71875 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71876 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71877 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71878 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71879 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71880 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71881 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71882 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71883 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71884 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71885 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71886 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71887 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71888 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71889 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71890 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71891 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71892 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71893 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71894 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71895 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71896 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71897 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71898 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71899 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71900 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71901 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71902 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71903 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71904 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71905 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71906 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71907 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71908 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71909 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71910 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71911 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71912 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71913 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71914 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71915 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71916 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71917 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71918 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71919 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71920 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71921 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71922 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71923 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71924 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71925 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71926 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71927 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71928 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71929 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71930 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71931 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71932 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71933 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71934 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71935 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71936 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71937 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71938 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71939 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71940 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71941 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71942 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71943 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71944 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71945 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71946 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71947 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71948 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71949 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71950 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71951 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71952 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71953 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71954 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71955 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71956 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71957 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71958 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71959 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71960 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71961 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71962 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71963 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71964 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71965 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71966 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71967 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71968 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			71969 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71970 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71971 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71972 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71973 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71974 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71975 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71976 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71977 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71978 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71979 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71980 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71981 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71982 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71983 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71984 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71985 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71986 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71987 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71988 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71989 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71990 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71991 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71992 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71993 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71994 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71995 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71996 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71997 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71998 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			71999 => [
				'validator'                => new NullableIsInArrayValidator( Values::FLOAT_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
