<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0097 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			97000 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97001 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97002 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97003 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97004 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97005 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97006 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97007 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97008 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97009 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97010 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97011 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97012 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97013 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97014 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97015 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97016 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97017 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97018 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97019 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97020 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97021 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97022 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97023 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97024 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97025 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97026 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97027 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97028 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97029 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97030 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97031 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97032 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97033 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97034 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97035 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97036 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97037 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97038 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97039 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97040 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97041 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97042 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97043 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97044 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97045 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97046 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97047 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97048 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97049 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97050 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97051 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97052 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97053 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97054 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97055 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97056 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97057 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97058 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97059 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97060 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97061 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97062 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97063 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97064 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97065 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97066 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97067 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97068 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97069 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97070 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97071 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97072 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97073 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97074 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97075 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97076 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97077 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97078 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97079 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97080 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97081 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97082 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97083 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97084 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97085 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97086 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97087 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97088 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97089 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97090 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97091 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97092 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97093 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97094 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97095 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97096 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97097 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97098 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97099 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97100 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97101 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97102 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97103 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97104 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97105 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97106 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97107 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97108 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97109 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97110 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97111 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97112 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97113 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97114 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97115 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97116 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97117 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97118 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97119 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97120 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97121 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97122 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97123 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97124 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97125 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97126 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97127 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97128 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97129 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97130 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97131 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97132 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97133 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97134 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97135 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97136 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97137 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97138 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97139 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97140 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97141 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97142 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97143 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97144 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97145 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97146 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97147 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97148 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97149 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97150 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97151 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97152 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97153 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97154 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97155 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97156 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97157 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97158 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97159 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97160 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97161 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97162 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97163 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97164 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97165 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97166 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97167 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97168 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97169 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97170 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97171 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97172 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97173 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97174 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97175 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97176 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97177 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97178 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97179 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97180 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97181 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97182 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97183 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97184 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97185 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97186 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97187 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97188 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97189 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97190 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97191 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97192 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97193 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97194 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97195 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97196 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97197 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97198 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97199 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97200 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97201 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97202 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97203 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97204 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97205 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97206 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97207 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97208 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97209 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97210 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97211 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97212 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97213 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97214 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97215 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97216 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97217 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97218 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97219 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97220 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97221 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97222 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97223 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97224 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97225 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97226 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97227 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97228 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97229 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97230 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97231 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97232 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97233 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97234 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97235 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97236 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97237 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97238 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97239 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97240 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97241 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97242 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97243 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97244 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97245 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97246 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97247 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97248 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97249 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97250 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97251 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97252 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97253 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97254 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97255 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97256 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97257 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97258 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97259 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97260 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97261 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97262 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97263 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97264 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97265 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97266 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97267 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97268 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97269 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97270 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97271 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97272 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97273 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97274 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97275 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97276 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97277 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97278 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97279 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97280 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97281 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97282 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97283 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97284 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97285 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97286 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97287 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97288 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97289 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97290 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97291 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97292 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97293 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97294 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97295 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97296 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97297 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97298 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97299 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97300 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97301 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97302 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97303 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97304 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97305 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97306 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97307 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97308 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97309 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97310 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97311 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97312 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97313 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97314 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97315 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97316 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97317 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97318 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97319 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97320 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97321 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97322 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97323 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97324 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97325 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97326 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97327 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97328 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97329 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97330 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97331 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97332 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97333 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97334 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97335 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97336 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97337 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97338 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97339 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97340 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97341 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97342 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97343 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97344 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97345 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97346 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97347 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97348 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97349 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97350 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97351 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97352 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97353 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97354 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97355 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97356 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97357 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97358 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97359 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97360 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97361 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97362 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97363 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97364 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97365 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97366 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97367 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97368 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97369 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97370 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97371 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97372 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97373 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97374 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97375 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97376 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97377 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97378 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97379 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97380 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97381 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97382 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97383 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97384 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97385 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97386 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97387 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97388 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97389 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97390 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97391 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97392 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97393 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97394 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97395 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97396 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97397 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97398 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97399 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97400 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97401 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97402 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97403 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97404 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97405 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97406 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97407 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97408 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97409 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97410 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97411 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97412 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97413 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97414 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97415 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97416 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97417 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97418 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97419 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97420 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97421 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97422 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97423 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97424 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97425 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97426 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97427 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97428 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97429 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97430 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97431 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97432 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97433 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97434 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97435 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97436 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97437 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97438 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97439 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97440 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97441 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97442 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97443 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97444 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97445 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97446 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97447 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97448 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97449 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97450 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97451 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97452 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97453 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97454 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97455 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97456 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97457 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97458 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97459 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97460 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97461 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97462 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97463 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97464 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97465 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97466 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97467 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97468 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97469 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97470 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97471 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97472 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97473 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97474 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97475 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97476 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97477 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97478 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97479 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97480 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97481 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97482 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97483 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97484 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97485 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97486 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97487 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97488 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97489 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97490 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97491 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97492 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97493 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97494 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97495 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97496 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97497 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97498 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97499 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97500 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97501 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97502 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97503 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97504 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97505 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97506 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97507 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97508 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97509 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97510 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97511 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97512 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97513 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97514 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97515 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97516 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97517 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97518 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97519 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97520 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97521 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97522 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97523 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97524 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97525 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97526 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97527 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97528 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97529 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97530 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97531 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97532 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97533 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97534 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97535 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97536 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97537 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97538 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97539 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97540 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97541 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97542 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97543 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97544 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97545 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97546 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97547 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97548 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97549 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97550 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97551 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97552 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97553 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97554 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97555 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97556 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97557 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97558 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97559 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97560 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97561 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97562 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97563 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97564 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97565 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97566 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97567 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97568 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97569 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97570 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97571 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97572 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97573 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97574 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97575 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97576 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97577 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97578 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97579 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97580 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97581 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97582 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97583 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97584 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97585 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97586 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97587 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97588 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97589 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97590 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97591 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97592 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97593 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97594 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97595 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97596 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97597 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97598 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97599 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97600 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97601 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97602 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97603 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97604 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97605 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97606 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97607 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97608 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97609 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97610 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97611 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97612 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97613 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97614 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97615 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97616 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97617 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97618 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97619 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97620 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97621 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97622 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97623 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97624 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97625 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97626 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97627 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97628 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97629 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97630 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97631 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97632 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97633 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97634 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97635 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97636 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97637 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97638 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97639 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97640 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97641 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97642 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97643 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97644 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97645 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97646 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97647 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97648 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97649 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97650 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97651 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97652 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97653 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97654 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97655 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97656 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97657 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97658 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97659 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97660 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97661 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97662 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97663 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97664 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97665 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97666 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97667 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97668 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97669 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97670 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97671 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97672 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97673 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97674 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97675 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97676 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97677 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97678 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97679 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97680 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97681 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97682 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97683 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97684 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97685 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97686 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97687 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97688 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97689 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97690 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97691 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97692 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97693 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97694 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97695 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97696 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97697 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97698 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97699 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97700 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97701 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97702 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97703 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97704 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97705 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97706 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97707 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97708 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97709 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97710 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97711 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97712 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97713 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97714 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97715 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97716 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97717 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97718 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97719 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97720 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97721 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97722 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97723 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97724 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97725 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97726 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97727 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97728 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97729 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97730 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97731 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97732 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97733 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97734 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97735 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97736 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97737 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97738 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97739 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97740 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97741 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97742 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97743 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97744 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97745 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97746 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97747 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97748 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97749 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97750 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97751 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97752 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97753 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97754 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97755 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97756 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97757 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97758 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97759 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97760 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97761 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97762 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97763 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97764 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97765 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97766 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97767 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97768 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97769 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97770 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97771 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97772 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97773 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97774 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97775 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97776 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97777 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97778 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97779 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97780 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97781 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97782 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97783 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97784 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97785 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97786 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97787 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97788 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97789 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97790 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97791 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97792 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97793 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97794 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97795 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97796 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97797 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97798 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97799 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97800 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97801 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97802 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97803 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97804 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97805 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97806 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97807 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97808 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97809 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97810 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97811 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97812 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97813 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97814 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97815 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97816 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97817 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97818 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97819 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97820 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97821 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97822 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97823 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97824 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97825 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97826 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97827 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97828 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97829 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97830 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97831 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97832 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97833 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97834 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97835 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97836 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97837 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97838 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97839 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97840 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97841 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97842 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97843 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97844 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97845 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97846 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97847 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97848 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97849 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97850 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97851 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97852 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97853 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97854 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97855 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97856 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97857 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97858 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97859 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97860 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97861 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97862 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97863 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97864 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97865 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97866 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97867 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97868 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97869 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97870 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97871 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97872 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97873 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97874 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97875 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97876 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97877 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97878 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97879 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97880 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97881 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97882 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97883 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97884 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97885 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97886 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97887 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97888 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97889 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97890 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97891 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97892 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97893 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97894 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97895 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97896 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97897 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97898 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97899 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97900 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97901 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97902 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97903 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97904 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97905 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97906 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97907 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97908 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97909 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97910 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97911 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97912 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97913 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97914 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97915 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97916 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97917 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97918 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97919 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97920 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97921 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97922 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97923 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97924 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97925 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97926 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97927 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97928 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97929 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97930 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97931 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97932 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97933 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97934 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97935 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97936 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97937 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97938 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97939 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97940 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97941 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97942 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97943 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97944 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97945 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97946 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97947 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97948 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97949 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97950 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97951 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97952 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97953 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97954 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97955 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97956 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97957 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97958 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97959 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97960 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97961 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97962 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97963 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97964 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97965 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97966 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97967 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97968 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			97969 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97970 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97971 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97972 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97973 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97974 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97975 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97976 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97977 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97978 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97979 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97980 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97981 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97982 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97983 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97984 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97985 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97986 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97987 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97988 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97989 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97990 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97991 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97992 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97993 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97994 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97995 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97996 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97997 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97998 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			97999 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
