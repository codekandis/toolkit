<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0002 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			2000 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2001 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2002 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2003 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2004 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2005 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2006 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2007 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2008 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2009 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2010 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2011 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2012 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2013 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2014 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2015 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2016 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2017 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2018 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2019 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2020 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2021 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2022 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2023 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2024 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2025 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2026 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2027 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2028 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2029 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2030 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2031 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2032 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2033 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2034 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2035 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2036 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2037 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2038 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2039 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2040 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2041 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2042 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2043 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2044 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2045 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2046 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2047 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2048 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2049 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2050 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2051 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2052 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2053 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2054 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2055 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2056 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2057 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2058 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2059 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2060 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2061 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2062 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2063 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2064 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2065 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2066 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2067 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2068 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2069 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2070 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2071 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2072 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2073 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2074 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2075 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2076 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2077 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2078 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2079 => [
				'validator'                => new IsBooleanIntegerStringArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2080 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2081 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2082 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2083 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2084 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2085 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2086 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2087 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2088 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2089 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2090 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2091 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2092 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2093 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2094 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2095 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2096 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2097 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2098 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2099 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2100 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2101 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2102 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2103 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2104 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2105 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2106 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2107 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2108 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2109 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2110 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2111 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2112 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2113 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2114 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2115 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2116 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2117 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2118 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2119 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2120 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2121 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2122 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2123 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2124 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2125 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2126 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2127 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2128 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2129 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2130 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2131 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2132 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2133 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2134 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2135 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2136 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2137 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2138 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2139 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2140 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2141 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2142 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2143 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2144 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2145 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2146 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2147 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2148 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2149 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2150 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2151 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2152 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2153 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2154 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2155 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2156 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2157 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2158 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2159 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2160 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2161 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2162 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2163 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2164 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2165 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2166 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2167 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2168 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2169 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2170 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2171 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2172 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2173 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2174 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2175 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2176 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2177 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2178 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2179 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2180 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2181 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2182 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2183 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2184 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2185 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2186 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2187 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2188 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2189 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2190 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2191 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2192 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2193 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2194 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2195 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2196 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2197 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2198 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2199 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2200 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2201 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2202 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2203 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2204 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2205 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2206 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2207 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2208 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2209 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2210 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2211 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2212 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2213 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2214 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2215 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2216 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2217 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2218 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2219 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2220 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2221 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2222 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2223 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2224 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2225 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2226 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2227 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2228 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2229 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2230 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2231 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2232 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2233 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2234 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2235 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2236 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2237 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2238 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2239 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2240 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2241 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2242 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2243 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2244 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2245 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2246 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2247 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2248 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2249 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2250 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2251 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2252 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2253 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2254 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2255 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2256 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2257 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2258 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2259 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2260 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2261 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2262 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2263 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2264 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2265 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2266 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2267 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2268 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2269 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2270 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2271 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2272 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2273 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2274 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2275 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2276 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2277 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2278 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2279 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2280 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2281 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2282 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2283 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2284 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2285 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2286 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2287 => [
				'validator'                => new IsBooleanIntegerStringValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2288 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2289 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2290 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2291 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2292 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2293 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2294 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2295 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2296 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2297 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2298 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2299 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2300 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2301 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2302 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2303 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2304 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2305 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2306 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2307 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2308 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2309 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2310 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2311 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2312 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2313 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2314 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2315 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2316 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2317 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2318 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2319 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2320 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2321 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2322 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2323 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2324 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2325 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2326 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2327 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2328 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2329 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2330 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2331 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2332 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2333 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2334 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2335 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2336 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2337 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2338 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2339 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2340 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2341 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2342 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2343 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2344 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2345 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2346 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2347 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2348 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2349 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2350 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2351 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2352 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2353 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2354 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2355 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2356 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2357 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2358 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2359 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2360 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2361 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2362 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2363 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2364 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2365 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2366 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2367 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2368 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2369 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2370 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2371 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2372 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2373 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2374 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2375 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2376 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2377 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2378 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2379 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2380 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2381 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2382 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2383 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2384 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2385 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2386 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2387 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2388 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2389 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2390 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2391 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2392 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2393 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2394 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2395 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2396 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2397 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2398 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2399 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2400 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2401 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2402 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2403 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2404 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2405 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2406 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2407 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2408 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2409 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2410 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2411 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2412 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2413 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2414 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2415 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2416 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2417 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2418 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2419 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2420 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2421 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2422 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2423 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2424 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2425 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2426 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2427 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2428 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2429 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2430 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2431 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2432 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2433 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2434 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2435 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2436 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2437 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2438 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2439 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2440 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2441 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2442 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2443 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2444 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2445 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2446 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2447 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2448 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2449 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2450 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2451 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2452 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2453 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2454 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2455 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2456 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2457 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2458 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2459 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2460 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2461 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2462 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2463 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2464 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2465 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2466 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2467 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2468 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2469 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2470 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2471 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2472 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2473 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2474 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2475 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2476 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2477 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2478 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2479 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2480 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2481 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2482 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2483 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2484 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2485 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2486 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2487 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2488 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2489 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2490 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2491 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2492 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2493 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2494 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2495 => [
				'validator'                => new IsBooleanIntegerValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2496 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2497 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2498 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2499 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2500 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2501 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2502 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2503 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2504 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2505 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2506 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2507 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2508 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2509 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2510 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2511 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2512 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2513 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2514 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2515 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2516 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2517 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2518 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2519 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2520 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2521 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2522 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2523 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2524 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2525 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2526 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2527 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2528 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2529 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2530 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2531 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2532 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2533 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2534 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2535 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2536 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2537 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2538 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2539 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2540 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2541 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2542 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2543 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2544 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2545 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2546 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2547 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2548 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2549 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2550 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2551 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2552 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2553 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2554 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2555 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2556 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2557 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2558 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2559 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2560 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2561 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2562 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2563 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2564 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2565 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2566 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2567 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2568 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2569 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2570 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2571 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2572 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2573 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2574 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2575 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2576 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2577 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2578 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2579 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2580 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2581 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2582 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2583 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2584 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2585 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2586 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2587 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2588 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2589 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2590 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2591 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2592 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2593 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2594 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2595 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2596 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2597 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2598 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2599 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2600 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2601 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2602 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2603 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2604 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2605 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2606 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2607 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2608 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2609 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2610 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2611 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2612 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2613 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2614 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2615 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2616 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2617 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2618 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2619 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2620 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2621 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2622 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2623 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2624 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2625 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2626 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2627 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2628 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2629 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2630 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2631 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2632 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2633 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2634 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2635 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2636 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2637 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2638 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2639 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2640 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2641 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2642 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2643 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2644 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2645 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2646 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2647 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2648 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2649 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2650 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2651 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2652 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2653 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2654 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2655 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2656 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2657 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2658 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2659 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2660 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2661 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2662 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2663 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2664 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2665 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2666 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2667 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2668 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2669 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2670 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2671 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2672 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2673 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2674 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2675 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2676 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2677 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2678 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2679 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2680 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2681 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2682 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2683 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2684 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2685 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2686 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2687 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2688 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2689 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2690 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2691 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2692 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2693 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2694 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2695 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2696 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2697 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2698 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2699 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2700 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2701 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2702 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2703 => [
				'validator'                => new IsBooleanStringArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2704 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2705 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2706 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2707 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2708 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2709 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2710 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2711 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2712 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2713 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2714 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2715 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2716 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2717 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2718 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2719 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2720 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2721 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2722 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2723 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2724 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2725 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2726 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2727 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2728 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2729 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2730 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2731 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2732 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2733 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2734 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2735 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2736 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2737 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2738 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2739 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2740 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2741 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2742 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2743 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2744 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2745 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2746 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2747 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2748 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2749 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2750 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2751 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2752 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2753 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2754 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2755 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2756 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2757 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2758 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2759 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2760 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2761 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2762 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2763 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2764 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2765 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2766 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2767 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2768 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2769 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2770 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2771 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2772 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2773 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2774 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2775 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2776 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2777 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2778 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2779 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2780 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2781 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2782 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2783 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2784 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2785 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2786 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2787 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2788 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2789 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2790 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2791 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2792 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2793 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2794 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2795 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2796 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2797 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2798 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2799 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2800 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2801 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2802 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2803 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2804 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2805 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2806 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2807 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2808 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2809 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2810 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2811 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2812 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2813 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2814 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2815 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2816 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2817 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2818 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2819 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2820 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2821 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2822 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2823 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2824 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2825 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2826 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2827 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2828 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2829 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2830 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2831 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2832 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2833 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2834 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2835 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2836 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2837 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2838 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2839 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2840 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2841 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2842 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2843 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2844 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2845 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2846 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2847 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2848 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2849 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2850 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2851 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2852 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2853 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2854 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2855 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2856 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2857 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2858 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2859 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2860 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2861 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2862 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2863 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2864 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2865 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2866 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2867 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2868 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2869 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2870 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2871 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2872 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2873 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2874 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2875 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2876 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2877 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2878 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2879 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2880 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2881 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2882 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2883 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2884 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2885 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2886 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2887 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2888 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2889 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2890 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2891 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2892 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2893 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2894 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2895 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2896 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2897 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2898 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2899 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2900 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2901 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2902 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2903 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2904 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2905 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2906 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2907 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2908 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2909 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2910 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2911 => [
				'validator'                => new IsBooleanStringValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2912 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2913 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2914 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2915 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2916 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2917 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2918 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			2919 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2920 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2921 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2922 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2923 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2924 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2925 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2926 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2927 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2928 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2929 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2930 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2931 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2932 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2933 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2934 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2935 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2936 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2937 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2938 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2939 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2940 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2941 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2942 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2943 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2944 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2945 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2946 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2947 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2948 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2949 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2950 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2951 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2952 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2953 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2954 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2955 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2956 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2957 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2958 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2959 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2960 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2961 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2962 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2963 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2964 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2965 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2966 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2967 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2968 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2969 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2970 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2971 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2972 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2973 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2974 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2975 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2976 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2977 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2978 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2979 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2980 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2981 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2982 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2983 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2984 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2985 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2986 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2987 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2988 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2989 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2990 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2991 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2992 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2993 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2994 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2995 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2996 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2997 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2998 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			2999 => [
				'validator'                => new IsBooleanValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
