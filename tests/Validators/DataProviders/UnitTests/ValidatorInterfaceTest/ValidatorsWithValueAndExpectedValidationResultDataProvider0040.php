<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0040 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			40000 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40001 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40002 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40003 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40004 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40005 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40006 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40007 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40008 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40009 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40010 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40011 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40012 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40013 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40014 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40015 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40016 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40017 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40018 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40019 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40020 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40021 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40022 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40023 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40024 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40025 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40026 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40027 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40028 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40029 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40030 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40031 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40032 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40033 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40034 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40035 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40036 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40037 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40038 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40039 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40040 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40041 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40042 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40043 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40044 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40045 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40046 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40047 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40048 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40049 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40050 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40051 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40052 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40053 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40054 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40055 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40056 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40057 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40058 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40059 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40060 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40061 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40062 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40063 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40064 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40065 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40066 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40067 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40068 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40069 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40070 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40071 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40072 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40073 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40074 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40075 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40076 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40077 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40078 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40079 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40080 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40081 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40082 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40083 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40084 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40085 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40086 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40087 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40088 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40089 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40090 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40091 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40092 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40093 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40094 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40095 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40096 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40097 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40098 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40099 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40100 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40101 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40102 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40103 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40104 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40105 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40106 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40107 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40108 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40109 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40110 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40111 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40112 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40113 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40114 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40115 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40116 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40117 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40118 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40119 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40120 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40121 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40122 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40123 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40124 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40125 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40126 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40127 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			40128 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40129 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40130 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40131 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40132 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40133 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40134 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40135 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40136 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40137 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40138 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40139 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40140 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40141 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40142 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40143 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40144 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40145 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40146 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40147 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40148 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40149 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40150 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40151 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40152 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40153 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40154 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40155 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40156 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40157 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40158 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40159 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40160 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40161 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40162 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40163 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40164 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40165 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40166 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40167 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40168 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40169 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40170 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40171 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40172 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40173 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40174 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40175 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40176 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40177 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40178 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40179 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40180 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40181 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40182 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40183 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40184 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40185 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40186 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40187 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40188 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40189 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40190 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40191 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40192 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40193 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40194 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40195 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40196 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40197 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40198 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40199 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40200 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40201 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40202 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40203 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40204 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40205 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40206 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40207 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40208 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40209 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40210 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40211 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40212 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40213 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40214 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40215 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40216 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40217 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40218 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40219 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40220 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40221 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40222 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40223 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40224 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40225 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40226 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40227 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40228 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40229 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40230 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40231 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40232 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40233 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40234 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40235 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40236 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40237 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40238 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40239 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40240 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40241 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40242 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40243 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40244 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40245 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40246 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40247 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40248 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40249 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40250 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40251 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40252 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40253 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40254 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40255 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40256 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40257 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40258 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40259 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40260 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40261 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40262 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40263 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40264 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40265 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40266 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40267 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40268 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40269 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40270 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40271 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40272 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40273 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40274 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40275 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40276 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40277 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40278 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40279 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40280 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40281 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40282 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40283 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40284 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40285 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40286 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40287 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40288 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40289 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40290 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40291 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40292 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40293 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40294 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40295 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40296 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40297 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40298 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40299 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40300 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40301 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40302 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40303 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40304 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40305 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40306 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40307 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40308 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40309 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40310 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40311 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40312 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40313 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40314 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40315 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40316 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40317 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40318 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40319 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40320 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40321 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40322 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40323 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40324 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40325 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40326 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40327 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40328 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40329 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40330 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40331 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40332 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40333 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40334 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40335 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40336 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			40337 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40338 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40339 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40340 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40341 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40342 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40343 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40344 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40345 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40346 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40347 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40348 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40349 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40350 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40351 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40352 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40353 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40354 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40355 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40356 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40357 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40358 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40359 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40360 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40361 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40362 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40363 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40364 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40365 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40366 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40367 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40368 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40369 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40370 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40371 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40372 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40373 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40374 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40375 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40376 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40377 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40378 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40379 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40380 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40381 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40382 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40383 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40384 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40385 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40386 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40387 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40388 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40389 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40390 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40391 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40392 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40393 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40394 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40395 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40396 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40397 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40398 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40399 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40400 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40401 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40402 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40403 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40404 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40405 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40406 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40407 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40408 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40409 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40410 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40411 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40412 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40413 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40414 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40415 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40416 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40417 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40418 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40419 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40420 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40421 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40422 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40423 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40424 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40425 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40426 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40427 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40428 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40429 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40430 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40431 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40432 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40433 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40434 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40435 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40436 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40437 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40438 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40439 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40440 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40441 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40442 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40443 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40444 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40445 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40446 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40447 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40448 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40449 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40450 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40451 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40452 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40453 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40454 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40455 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40456 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40457 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40458 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40459 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40460 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40461 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40462 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40463 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40464 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40465 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40466 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40467 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40468 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40469 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40470 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40471 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40472 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40473 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40474 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40475 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40476 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40477 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40478 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40479 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40480 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40481 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40482 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40483 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40484 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40485 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40486 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40487 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40488 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40489 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40490 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40491 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40492 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40493 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40494 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40495 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40496 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40497 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40498 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40499 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40500 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40501 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40502 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40503 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40504 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40505 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40506 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40507 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40508 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40509 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40510 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40511 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40512 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40513 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40514 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40515 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40516 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40517 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40518 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40519 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40520 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40521 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40522 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40523 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40524 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40525 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40526 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40527 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40528 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40529 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40530 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40531 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40532 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40533 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40534 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40535 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40536 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40537 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40538 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40539 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40540 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40541 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40542 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40543 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40544 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40545 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40546 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40547 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40548 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40549 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			40550 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40551 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40552 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40553 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40554 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40555 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40556 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40557 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40558 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40559 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40560 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40561 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40562 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40563 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40564 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40565 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40566 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40567 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40568 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40569 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40570 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40571 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40572 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40573 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40574 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40575 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40576 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40577 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40578 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40579 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40580 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40581 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40582 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40583 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40584 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40585 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40586 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40587 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40588 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40589 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40590 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40591 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40592 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40593 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40594 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40595 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40596 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40597 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40598 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40599 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40600 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40601 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40602 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40603 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40604 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40605 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40606 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40607 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40608 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40609 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40610 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40611 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40612 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40613 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40614 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40615 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40616 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40617 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40618 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40619 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40620 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40621 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40622 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40623 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40624 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40625 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40626 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40627 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40628 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40629 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40630 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40631 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40632 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40633 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40634 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40635 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40636 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40637 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40638 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40639 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40640 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40641 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40642 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40643 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40644 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40645 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40646 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40647 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40648 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40649 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40650 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40651 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40652 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40653 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40654 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40655 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40656 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40657 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40658 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40659 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40660 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40661 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40662 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40663 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40664 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40665 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40666 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40667 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40668 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40669 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40670 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40671 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40672 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40673 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40674 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40675 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40676 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40677 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40678 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40679 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40680 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40681 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40682 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40683 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40684 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40685 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40686 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40687 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40688 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40689 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40690 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40691 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40692 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40693 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40694 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40695 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40696 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40697 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40698 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40699 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40700 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40701 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40702 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40703 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40704 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40705 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40706 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40707 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40708 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40709 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40710 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40711 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40712 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40713 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40714 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40715 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40716 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40717 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40718 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40719 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40720 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40721 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40722 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40723 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40724 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40725 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40726 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40727 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40728 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40729 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40730 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40731 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40732 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40733 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40734 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40735 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40736 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40737 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40738 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40739 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40740 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40741 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40742 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40743 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40744 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40745 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40746 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40747 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40748 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40749 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40750 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40751 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40752 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40753 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40754 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40755 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40756 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40757 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40758 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			40759 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40760 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40761 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40762 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40763 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40764 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40765 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40766 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40767 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40768 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40769 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40770 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40771 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40772 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40773 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40774 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40775 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40776 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40777 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40778 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40779 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40780 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40781 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40782 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40783 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40784 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40785 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40786 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40787 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40788 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40789 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40790 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40791 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40792 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40793 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40794 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40795 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40796 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40797 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40798 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40799 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40800 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40801 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40802 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40803 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40804 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40805 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40806 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40807 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40808 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40809 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40810 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40811 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40812 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40813 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40814 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40815 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40816 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40817 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40818 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40819 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40820 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40821 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40822 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40823 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40824 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40825 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40826 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40827 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40828 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40829 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40830 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40831 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40832 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40833 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40834 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40835 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40836 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40837 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40838 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40839 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40840 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40841 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40842 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40843 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40844 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40845 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40846 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40847 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40848 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40849 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			40850 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40851 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40852 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40853 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40854 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40855 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40856 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40857 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40858 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40859 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40860 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40861 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40862 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40863 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40864 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40865 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40866 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40867 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40868 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40869 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40870 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40871 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40872 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40873 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40874 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40875 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40876 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40877 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40878 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40879 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40880 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40881 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40882 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40883 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40884 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40885 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40886 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40887 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40888 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40889 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40890 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40891 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40892 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40893 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40894 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40895 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40896 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40897 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40898 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40899 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40900 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40901 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40902 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40903 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40904 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40905 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40906 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40907 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40908 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40909 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40910 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40911 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40912 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40913 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40914 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40915 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40916 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40917 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40918 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40919 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40920 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40921 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40922 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40923 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40924 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40925 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40926 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40927 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40928 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40929 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40930 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40931 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40932 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40933 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40934 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40935 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40936 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40937 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40938 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40939 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40940 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40941 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40942 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40943 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40944 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40945 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40946 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40947 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40948 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40949 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40950 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40951 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40952 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40953 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40954 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40955 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40956 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40957 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40958 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40959 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40960 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40961 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40962 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40963 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40964 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40965 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40966 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40967 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40968 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40969 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40970 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40971 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40972 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40973 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40974 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40975 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40976 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40977 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40978 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40979 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40980 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40981 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40982 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40983 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40984 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40985 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40986 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40987 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40988 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40989 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40990 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40991 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40992 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40993 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40994 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40995 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40996 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40997 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40998 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			40999 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
