<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\NullableIsNonEmptyStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsNonEmptyStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsNullArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0106 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			106000 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106001 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106002 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106003 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106004 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106005 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106006 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106007 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106008 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106009 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106010 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106011 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106012 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106013 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106014 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106015 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106016 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106017 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106018 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106019 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106020 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106021 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106022 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106023 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106024 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106025 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106026 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106027 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106028 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106029 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106030 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106031 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106032 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106033 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106034 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106035 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106036 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106037 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106038 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106039 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106040 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106041 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106042 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106043 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106044 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106045 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106046 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106047 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106048 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106049 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106050 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106051 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106052 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106053 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106054 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106055 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106056 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106057 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106058 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106059 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106060 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106061 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106062 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106063 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106064 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106065 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106066 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106067 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106068 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106069 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106070 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106071 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106072 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106073 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106074 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106075 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106076 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106077 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106078 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106079 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106080 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106081 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106082 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106083 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106084 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106085 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106086 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106087 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106088 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106089 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106090 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106091 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106092 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106093 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106094 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106095 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106096 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106097 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106098 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106099 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106100 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106101 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106102 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106103 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106104 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106105 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106106 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106107 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106108 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106109 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106110 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106111 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106112 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106113 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106114 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106115 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106116 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106117 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106118 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106119 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106120 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106121 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106122 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106123 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106124 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106125 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106126 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106127 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106128 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106129 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106130 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106131 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106132 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106133 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106134 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106135 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106136 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106137 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106138 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106139 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106140 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106141 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106142 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106143 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106144 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106145 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106146 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106147 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106148 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106149 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106150 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106151 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106152 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106153 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106154 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106155 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106156 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106157 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106158 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106159 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106160 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106161 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106162 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106163 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106164 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106165 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106166 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106167 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106168 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106169 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106170 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106171 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106172 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106173 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106174 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106175 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106176 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106177 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106178 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106179 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106180 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106181 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106182 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106183 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106184 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106185 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106186 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106187 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106188 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106189 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106190 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106191 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106192 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106193 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106194 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106195 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106196 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106197 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106198 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106199 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106200 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106201 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106202 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106203 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106204 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106205 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106206 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106207 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106208 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106209 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106210 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106211 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106212 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106213 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106214 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106215 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106216 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106217 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106218 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106219 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106220 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106221 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106222 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106223 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106224 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106225 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106226 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106227 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106228 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106229 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106230 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106231 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106232 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106233 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106234 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106235 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106236 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106237 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106238 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106239 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106240 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106241 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106242 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106243 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106244 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106245 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106246 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106247 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106248 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106249 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106250 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106251 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106252 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106253 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106254 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106255 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106256 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106257 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106258 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106259 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106260 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106261 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106262 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106263 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106264 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106265 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106266 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106267 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106268 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106269 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106270 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106271 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106272 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106273 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106274 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106275 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106276 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106277 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106278 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106279 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106280 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106281 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106282 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106283 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106284 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106285 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106286 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106287 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106288 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106289 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106290 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106291 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106292 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106293 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106294 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106295 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106296 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106297 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106298 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106299 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106300 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106301 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106302 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106303 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106304 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106305 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106306 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106307 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106308 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106309 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106310 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106311 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106312 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106313 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106314 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106315 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106316 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106317 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106318 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106319 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106320 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106321 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106322 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106323 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106324 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106325 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106326 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106327 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106328 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106329 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106330 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106331 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106332 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106333 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106334 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106335 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106336 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106337 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106338 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106339 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106340 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106341 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106342 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106343 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106344 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106345 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106346 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106347 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106348 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106349 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106350 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106351 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106352 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106353 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106354 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106355 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106356 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106357 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106358 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106359 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106360 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106361 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106362 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106363 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106364 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106365 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106366 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106367 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106368 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106369 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106370 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106371 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106372 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106373 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106374 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106375 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106376 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106377 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106378 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106379 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106380 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106381 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106382 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106383 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106384 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106385 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106386 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106387 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106388 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106389 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106390 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106391 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106392 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106393 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106394 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106395 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106396 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106397 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106398 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106399 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106400 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106401 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106402 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106403 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106404 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106405 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106406 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106407 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106408 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106409 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106410 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106411 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106412 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106413 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106414 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106415 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106416 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106417 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106418 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106419 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106420 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106421 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106422 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106423 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106424 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106425 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106426 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106427 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106428 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106429 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106430 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106431 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106432 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106433 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106434 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106435 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106436 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106437 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106438 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106439 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106440 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106441 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106442 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106443 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106444 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106445 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106446 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106447 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106448 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106449 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106450 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106451 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106452 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106453 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106454 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106455 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106456 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106457 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106458 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106459 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106460 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106461 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106462 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106463 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106464 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106465 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106466 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106467 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106468 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106469 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106470 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106471 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106472 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106473 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106474 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106475 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106476 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106477 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106478 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106479 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106480 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106481 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106482 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106483 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106484 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106485 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106486 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106487 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106488 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106489 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106490 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106491 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106492 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106493 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106494 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106495 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106496 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106497 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106498 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106499 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106500 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106501 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106502 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106503 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106504 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106505 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106506 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106507 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106508 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106509 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106510 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106511 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106512 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106513 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106514 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106515 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106516 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106517 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106518 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106519 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106520 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106521 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106522 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106523 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106524 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106525 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106526 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106527 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106528 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106529 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106530 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106531 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106532 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106533 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106534 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106535 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106536 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106537 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106538 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106539 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106540 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106541 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106542 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106543 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106544 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106545 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106546 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106547 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106548 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106549 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106550 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106551 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106552 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106553 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106554 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106555 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106556 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106557 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106558 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106559 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106560 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106561 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106562 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106563 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106564 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106565 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106566 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106567 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106568 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106569 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106570 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106571 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106572 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106573 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106574 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106575 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106576 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106577 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106578 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106579 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106580 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106581 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106582 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106583 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106584 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106585 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106586 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106587 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106588 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106589 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106590 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106591 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106592 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106593 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106594 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106595 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106596 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106597 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106598 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106599 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106600 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106601 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106602 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106603 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106604 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106605 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106606 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106607 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106608 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106609 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106610 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106611 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106612 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106613 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106614 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106615 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106616 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106617 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106618 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106619 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106620 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106621 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106622 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106623 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106624 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106625 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106626 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106627 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106628 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106629 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106630 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106631 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106632 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106633 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106634 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106635 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106636 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106637 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106638 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106639 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106640 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106641 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106642 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106643 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106644 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106645 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106646 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106647 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106648 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106649 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106650 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106651 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106652 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106653 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106654 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106655 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106656 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106657 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106658 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106659 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106660 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106661 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106662 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106663 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106664 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106665 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106666 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106667 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106668 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106669 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106670 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106671 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106672 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106673 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106674 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106675 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106676 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106677 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106678 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106679 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106680 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106681 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106682 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106683 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106684 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106685 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106686 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106687 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106688 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106689 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106690 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106691 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106692 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106693 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106694 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106695 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106696 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106697 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106698 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106699 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106700 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106701 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106702 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106703 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106704 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106705 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106706 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106707 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106708 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106709 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106710 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106711 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106712 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106713 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106714 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106715 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106716 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106717 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106718 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106719 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106720 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106721 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106722 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106723 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106724 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106725 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106726 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106727 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106728 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106729 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106730 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106731 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106732 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106733 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106734 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106735 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106736 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106737 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106738 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106739 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106740 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106741 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106742 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106743 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106744 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106745 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106746 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106747 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106748 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106749 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106750 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106751 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106752 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106753 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106754 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106755 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106756 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106757 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106758 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106759 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106760 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106761 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106762 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106763 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106764 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106765 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106766 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106767 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106768 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106769 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106770 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106771 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106772 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106773 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106774 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106775 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106776 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106777 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106778 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106779 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106780 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106781 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106782 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106783 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106784 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106785 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106786 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106787 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106788 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106789 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106790 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106791 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106792 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106793 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106794 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106795 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106796 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106797 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106798 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106799 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106800 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106801 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106802 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106803 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106804 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106805 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106806 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106807 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106808 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106809 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106810 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106811 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106812 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106813 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106814 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106815 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106816 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106817 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106818 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106819 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106820 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106821 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106822 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106823 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106824 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106825 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106826 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106827 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106828 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106829 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106830 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106831 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106832 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106833 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106834 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106835 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106836 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106837 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106838 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106839 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106840 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106841 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106842 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106843 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106844 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106845 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106846 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106847 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106848 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106849 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106850 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106851 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106852 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106853 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106854 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106855 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106856 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106857 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106858 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106859 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106860 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106861 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106862 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106863 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106864 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106865 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106866 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106867 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106868 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106869 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106870 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106871 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106872 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106873 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106874 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106875 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106876 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106877 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106878 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106879 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106880 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106881 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106882 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106883 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106884 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106885 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106886 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106887 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106888 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106889 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106890 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106891 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106892 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106893 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106894 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106895 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106896 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106897 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106898 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106899 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106900 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106901 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106902 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106903 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106904 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106905 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106906 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106907 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106908 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106909 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106910 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106911 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106912 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106913 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			106914 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106915 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106916 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106917 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106918 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106919 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106920 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106921 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106922 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106923 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106924 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106925 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106926 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106927 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106928 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106929 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106930 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106931 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106932 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106933 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106934 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106935 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106936 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106937 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106938 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106939 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106940 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106941 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106942 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106943 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106944 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106945 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106946 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106947 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106948 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106949 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106950 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106951 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106952 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106953 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106954 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106955 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106956 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106957 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106958 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106959 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106960 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106961 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106962 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106963 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106964 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106965 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106966 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106967 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106968 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106969 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106970 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106971 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106972 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106973 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106974 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106975 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106976 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106977 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106978 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106979 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106980 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106981 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106982 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106983 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106984 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106985 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106986 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106987 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106988 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106989 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106990 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106991 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106992 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106993 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106994 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106995 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106996 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106997 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106998 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			106999 => [
				'validator'                => new NullableIsNullArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
