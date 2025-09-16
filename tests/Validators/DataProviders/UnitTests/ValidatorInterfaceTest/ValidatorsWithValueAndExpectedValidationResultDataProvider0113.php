<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\NullableValidatorChain;
use CodeKandis\ToolKit\Validators\ValidatorChain;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0113 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			113000 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113001 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113002 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113003 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113004 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113005 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113006 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113007 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113008 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113009 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113010 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113011 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113012 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113013 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113014 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113015 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113016 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113017 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113018 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113019 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113020 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113021 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113022 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113023 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113024 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113025 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113026 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113027 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113028 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113029 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113030 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113031 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113032 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113033 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113034 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113035 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113036 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113037 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113038 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113039 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113040 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113041 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113042 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113043 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113044 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113045 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113046 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113047 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113048 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113049 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113050 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113051 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113052 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113053 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113054 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113055 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113056 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113057 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113058 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113059 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113060 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113061 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113062 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113063 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113064 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113065 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113066 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113067 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113068 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113069 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113070 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113071 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113072 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113073 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113074 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113075 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113076 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113077 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113078 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113079 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113080 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113081 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113082 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113083 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113084 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113085 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113086 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113087 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113088 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113089 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113090 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113091 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113092 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113093 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113094 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113095 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113096 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113097 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113098 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113099 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113100 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113101 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113102 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113103 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113104 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113105 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113106 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113107 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113108 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113109 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113110 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113111 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113112 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113113 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113114 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113115 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113116 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113117 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113118 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113119 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113120 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113121 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113122 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113123 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113124 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113125 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113126 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113127 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113128 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113129 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113130 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113131 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113132 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113133 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113134 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113135 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113136 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113137 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113138 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113139 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113140 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113141 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113142 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113143 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113144 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113145 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113146 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113147 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113148 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113149 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113150 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113151 => [
				'validator'                => new NullableValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113152 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113153 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113154 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113155 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113156 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113157 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113158 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113159 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113160 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113161 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113162 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113163 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113164 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113165 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113166 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113167 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113168 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113169 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113170 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113171 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113172 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113173 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113174 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113175 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113176 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113177 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113178 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113179 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113180 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113181 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113182 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113183 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113184 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113185 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113186 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113187 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113188 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113189 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113190 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113191 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113192 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113193 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113194 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113195 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113196 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113197 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113198 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113199 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113200 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113201 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113202 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113203 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113204 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113205 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113206 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113207 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113208 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113209 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113210 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113211 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113212 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113213 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113214 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113215 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113216 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113217 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113218 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113219 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113220 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113221 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113222 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113223 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113224 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113225 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113226 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113227 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113228 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113229 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113230 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113231 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113232 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113233 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113234 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113235 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113236 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113237 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113238 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113239 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113240 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113241 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113242 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113243 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113244 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113245 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113246 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113247 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113248 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113249 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113250 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113251 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113252 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113253 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113254 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113255 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113256 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113257 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113258 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113259 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113260 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113261 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113262 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113263 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113264 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113265 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113266 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113267 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113268 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113269 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113270 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113271 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113272 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113273 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113274 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113275 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113276 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113277 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113278 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113279 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113280 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113281 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113282 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113283 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113284 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113285 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113286 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113287 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113288 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113289 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113290 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113291 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113292 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113293 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113294 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113295 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113296 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113297 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113298 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113299 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113300 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113301 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113302 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113303 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113304 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113305 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113306 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113307 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113308 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113309 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113310 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113311 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113312 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113313 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113314 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113315 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113316 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113317 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113318 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113319 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113320 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113321 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113322 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113323 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113324 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113325 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113326 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113327 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113328 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113329 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113330 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113331 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113332 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113333 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113334 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113335 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113336 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113337 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113338 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113339 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113340 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113341 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113342 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113343 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113344 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113345 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113346 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113347 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113348 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113349 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113350 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113351 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113352 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113353 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113354 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113355 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113356 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113357 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113358 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113359 => [
				'validator'                => new NullableValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113360 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113361 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113362 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113363 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113364 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113365 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113366 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113367 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113368 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113369 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113370 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113371 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113372 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113373 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113374 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113375 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113376 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113377 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113378 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113379 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113380 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113381 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113382 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113383 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113384 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113385 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113386 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113387 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113388 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113389 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113390 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113391 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113392 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113393 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113394 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113395 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113396 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113397 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113398 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113399 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113400 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113401 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113402 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113403 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113404 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113405 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113406 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113407 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113408 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113409 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113410 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113411 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113412 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113413 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113414 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113415 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113416 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113417 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113418 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113419 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113420 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113421 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113422 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113423 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113424 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113425 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113426 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113427 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113428 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113429 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113430 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113431 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113432 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113433 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113434 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113435 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113436 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113437 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113438 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113439 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113440 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113441 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113442 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113443 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113444 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113445 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113446 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113447 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113448 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113449 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113450 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113451 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113452 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113453 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113454 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113455 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113456 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113457 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113458 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113459 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113460 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113461 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113462 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113463 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113464 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113465 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113466 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113467 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113468 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113469 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113470 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113471 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113472 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113473 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113474 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113475 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113476 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113477 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113478 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113479 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113480 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113481 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113482 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113483 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113484 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113485 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113486 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113487 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113488 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113489 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113490 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113491 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113492 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113493 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113494 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113495 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113496 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113497 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113498 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113499 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113500 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113501 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113502 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113503 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113504 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113505 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113506 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113507 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113508 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113509 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113510 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113511 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113512 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113513 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113514 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113515 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113516 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113517 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113518 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113519 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113520 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113521 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113522 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113523 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113524 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113525 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113526 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113527 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113528 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113529 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113530 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113531 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113532 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113533 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113534 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113535 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113536 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113537 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113538 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113539 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113540 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113541 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113542 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113543 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113544 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113545 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113546 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113547 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113548 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113549 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113550 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113551 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113552 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113553 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113554 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113555 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113556 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113557 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113558 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113559 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113560 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113561 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113562 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113563 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113564 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113565 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113566 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113567 => [
				'validator'                => new ValidatorChain(
					...Values::createEmptyValidators()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113568 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113569 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113570 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113571 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113572 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113573 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113574 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113575 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113576 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113577 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113578 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113579 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113580 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113581 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113582 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113583 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113584 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113585 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113586 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113587 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113588 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113589 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113590 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113591 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113592 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113593 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113594 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113595 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113596 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113597 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113598 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113599 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113600 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113601 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113602 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113603 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113604 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113605 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113606 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113607 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113608 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113609 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113610 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113611 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113612 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113613 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113614 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113615 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113616 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113617 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113618 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113619 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113620 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113621 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113622 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113623 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113624 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113625 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113626 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113627 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113628 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113629 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113630 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113631 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113632 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113633 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113634 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113635 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113636 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113637 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113638 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113639 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113640 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113641 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113642 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113643 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113644 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113645 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113646 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113647 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113648 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113649 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113650 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113651 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113652 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113653 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113654 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113655 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113656 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113657 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113658 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113659 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113660 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113661 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113662 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113663 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113664 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113665 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113666 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113667 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113668 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113669 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113670 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113671 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113672 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113673 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113674 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113675 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113676 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113677 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113678 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113679 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113680 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113681 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113682 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113683 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113684 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113685 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113686 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113687 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113688 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113689 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113690 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113691 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113692 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113693 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113694 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113695 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113696 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113697 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113698 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113699 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113700 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113701 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113702 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113703 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113704 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113705 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113706 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113707 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113708 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113709 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113710 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113711 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113712 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113713 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113714 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113715 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113716 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113717 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113718 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113719 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113720 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113721 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113722 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113723 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113724 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113725 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113726 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113727 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113728 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113729 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113730 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113731 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113732 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113733 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113734 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113735 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113736 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113737 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113738 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113739 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113740 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113741 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113742 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113743 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113744 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113745 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113746 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113747 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113748 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113749 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113750 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113751 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113752 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113753 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113754 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113755 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113756 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113757 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113758 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113759 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113760 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113761 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113762 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113763 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113764 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113765 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113766 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113767 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113768 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113769 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113770 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113771 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113772 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113773 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113774 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113775 => [
				'validator'                => new ValidatorChain(
					...Values::createValidators()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113776 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113777 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113778 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113779 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113780 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113781 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113782 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113783 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113784 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113785 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113786 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113787 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113788 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113789 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113790 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113791 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113792 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113793 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113794 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113795 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113796 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113797 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113798 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113799 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113800 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113801 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113802 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113803 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113804 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113805 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113806 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113807 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113808 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113809 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113810 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113811 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113812 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113813 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113814 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113815 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113816 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113817 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113818 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113819 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113820 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113821 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113822 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113823 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113824 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113825 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113826 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113827 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113828 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113829 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113830 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113831 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113832 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113833 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113834 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113835 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113836 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113837 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113838 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113839 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113840 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113841 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113842 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113843 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113844 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113845 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113846 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113847 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113848 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113849 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113850 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113851 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113852 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113853 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113854 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113855 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113856 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113857 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113858 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113859 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113860 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113861 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113862 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113863 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113864 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113865 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113866 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113867 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113868 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113869 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113870 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113871 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113872 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113873 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113874 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113875 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113876 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113877 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113878 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113879 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113880 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113881 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113882 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113883 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113884 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113885 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113886 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113887 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113888 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113889 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113890 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113891 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113892 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113893 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113894 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113895 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113896 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113897 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113898 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113899 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113900 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113901 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113902 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113903 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113904 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113905 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113906 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113907 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113908 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113909 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113910 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113911 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113912 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113913 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113914 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113915 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113916 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113917 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113918 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113919 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113920 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113921 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113922 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113923 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113924 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113925 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113926 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113927 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113928 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113929 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113930 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113931 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113932 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113933 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113934 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113935 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113936 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113937 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113938 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113939 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113940 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113941 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113942 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113943 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113944 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113945 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113946 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113947 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113948 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113949 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113950 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113951 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113952 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113953 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113954 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113955 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113956 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113957 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113958 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113959 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113960 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113961 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113962 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113963 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113964 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113965 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113966 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113967 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113968 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113969 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113970 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113971 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113972 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113973 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113974 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113975 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113976 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113977 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113978 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113979 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113980 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113981 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			113982 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113983 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113984 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113985 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113986 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113987 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113988 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113989 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113990 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113991 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113992 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113993 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113994 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113995 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113996 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113997 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113998 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			113999 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
