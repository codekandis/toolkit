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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0018 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			18000 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18001 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18002 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18003 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18004 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18005 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18006 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18007 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18008 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18009 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18010 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18011 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18012 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18013 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18014 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18015 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18016 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18017 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18018 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18019 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18020 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18021 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18022 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18023 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18024 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18025 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18026 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18027 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18028 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18029 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18030 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18031 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18032 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18033 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18034 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18035 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18036 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18037 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18038 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18039 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18040 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18041 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18042 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18043 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18044 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18045 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18046 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18047 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18048 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18049 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18050 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18051 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18052 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18053 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18054 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18055 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18056 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18057 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18058 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18059 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18060 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18061 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18062 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18063 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18064 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18065 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18066 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18067 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18068 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18069 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18070 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18071 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18072 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18073 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18074 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18075 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18076 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18077 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18078 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18079 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18080 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18081 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18082 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18083 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18084 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18085 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18086 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18087 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18088 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18089 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18090 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18091 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18092 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18093 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18094 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18095 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18096 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18097 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18098 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18099 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18100 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18101 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18102 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18103 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18104 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18105 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18106 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18107 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18108 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18109 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18110 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18111 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18112 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18113 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18114 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18115 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18116 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18117 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18118 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18119 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18120 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18121 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18122 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18123 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18124 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18125 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18126 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18127 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18128 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18129 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18130 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18131 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18132 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18133 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18134 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18135 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18136 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18137 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18138 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18139 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18140 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18141 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18142 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18143 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18144 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18145 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18146 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18147 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18148 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18149 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18150 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18151 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18152 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18153 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18154 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18155 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18156 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18157 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18158 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18159 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18160 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18161 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18162 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18163 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18164 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18165 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18166 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18167 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18168 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18169 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			18170 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			18171 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18172 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18173 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18174 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18175 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18176 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18177 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18178 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18179 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18180 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18181 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18182 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18183 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18184 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18185 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18186 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18187 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18188 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18189 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18190 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18191 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18192 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18193 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18194 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18195 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18196 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18197 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18198 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18199 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18200 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18201 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18202 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18203 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18204 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18205 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18206 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18207 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18208 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18209 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18210 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18211 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18212 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18213 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18214 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18215 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18216 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18217 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18218 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18219 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18220 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18221 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18222 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18223 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18224 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18225 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18226 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18227 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18228 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18229 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18230 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18231 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18232 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18233 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18234 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18235 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18236 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18237 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18238 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18239 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18240 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18241 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18242 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18243 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18244 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18245 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18246 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18247 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18248 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18249 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18250 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18251 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18252 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18253 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18254 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18255 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18256 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18257 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18258 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18259 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18260 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18261 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18262 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18263 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18264 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18265 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18266 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18267 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18268 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18269 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18270 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18271 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18272 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18273 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18274 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18275 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18276 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18277 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18278 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18279 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18280 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18281 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18282 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18283 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18284 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18285 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18286 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18287 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18288 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18289 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18290 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18291 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18292 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18293 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18294 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18295 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18296 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18297 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18298 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18299 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18300 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18301 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18302 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18303 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18304 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18305 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18306 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18307 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18308 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18309 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18310 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18311 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18312 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18313 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18314 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18315 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18316 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18317 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18318 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18319 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18320 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18321 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18322 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18323 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18324 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18325 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18326 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18327 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18328 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18329 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18330 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18331 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18332 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18333 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18334 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18335 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18336 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18337 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18338 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18339 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18340 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18341 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18342 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18343 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18344 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18345 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18346 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18347 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18348 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18349 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18350 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18351 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18352 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18353 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18354 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18355 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18356 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18357 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18358 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18359 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18360 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18361 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18362 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18363 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18364 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18365 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18366 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18367 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18368 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18369 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18370 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18371 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18372 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18373 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18374 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18375 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18376 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18377 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			18378 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			18379 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18380 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18381 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18382 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18383 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18384 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18385 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18386 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18387 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18388 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18389 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18390 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18391 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18392 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18393 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18394 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18395 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18396 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18397 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18398 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18399 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18400 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18401 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18402 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18403 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18404 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18405 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18406 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18407 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18408 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18409 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18410 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18411 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18412 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18413 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18414 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18415 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18416 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18417 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18418 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18419 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18420 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18421 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18422 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18423 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18424 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18425 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18426 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18427 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18428 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18429 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18430 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18431 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18432 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18433 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18434 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18435 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18436 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18437 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18438 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18439 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18440 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18441 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18442 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18443 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18444 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18445 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18446 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18447 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18448 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18449 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18450 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18451 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18452 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18453 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18454 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18455 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18456 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18457 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18458 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18459 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18460 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18461 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18462 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18463 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18464 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18465 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18466 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18467 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18468 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18469 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18470 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18471 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18472 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18473 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18474 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18475 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18476 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18477 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18478 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18479 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18480 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18481 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18482 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18483 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18484 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18485 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18486 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18487 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18488 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18489 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18490 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18491 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18492 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18493 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18494 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18495 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18496 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18497 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18498 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18499 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18500 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18501 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18502 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18503 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18504 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18505 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18506 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18507 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18508 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18509 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18510 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18511 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18512 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18513 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18514 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18515 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18516 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18517 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18518 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18519 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18520 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18521 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18522 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18523 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18524 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18525 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18526 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18527 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18528 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18529 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18530 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18531 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18532 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18533 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18534 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18535 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18536 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18537 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18538 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18539 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18540 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18541 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18542 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18543 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18544 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18545 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18546 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18547 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18548 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18549 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18550 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18551 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18552 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18553 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18554 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18555 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18556 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18557 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18558 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18559 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18560 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18561 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18562 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18563 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18564 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18565 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18566 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18567 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18568 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18569 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18570 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18571 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18572 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18573 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18574 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18575 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18576 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18577 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18578 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18579 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18580 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18581 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18582 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18583 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18584 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18585 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18586 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18587 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18588 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18589 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18590 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18591 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			18592 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18593 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18594 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18595 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18596 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18597 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18598 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18599 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18600 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18601 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18602 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18603 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18604 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18605 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18606 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18607 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18608 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18609 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18610 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18611 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18612 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18613 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18614 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18615 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18616 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18617 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18618 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18619 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18620 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18621 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18622 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18623 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18624 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18625 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18626 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18627 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18628 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18629 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18630 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18631 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18632 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18633 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18634 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18635 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18636 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18637 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18638 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18639 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18640 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18641 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18642 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18643 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18644 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18645 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18646 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18647 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18648 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18649 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18650 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18651 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18652 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18653 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18654 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18655 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18656 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18657 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18658 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18659 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18660 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18661 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18662 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18663 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18664 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18665 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18666 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18667 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18668 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18669 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18670 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18671 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18672 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18673 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18674 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18675 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18676 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18677 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18678 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18679 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18680 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18681 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18682 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18683 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18684 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18685 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18686 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18687 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18688 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18689 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18690 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18691 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18692 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18693 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18694 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18695 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18696 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18697 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18698 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18699 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18700 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18701 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18702 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18703 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18704 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18705 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18706 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18707 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18708 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18709 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18710 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18711 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18712 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18713 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18714 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18715 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18716 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18717 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18718 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18719 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18720 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18721 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18722 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18723 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18724 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18725 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18726 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18727 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18728 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18729 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18730 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18731 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18732 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18733 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18734 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18735 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18736 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18737 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18738 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18739 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18740 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18741 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18742 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18743 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18744 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18745 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18746 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18747 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18748 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18749 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18750 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18751 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18752 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18753 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18754 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18755 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18756 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18757 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18758 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18759 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18760 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18761 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18762 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18763 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18764 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18765 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18766 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18767 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18768 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18769 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18770 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18771 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18772 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18773 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18774 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18775 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18776 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18777 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18778 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18779 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18780 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18781 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18782 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18783 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18784 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18785 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18786 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18787 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18788 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18789 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18790 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18791 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18792 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18793 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18794 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18795 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18796 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18797 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18798 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18799 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18800 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			18801 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18802 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18803 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18804 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18805 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18806 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18807 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18808 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18809 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18810 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18811 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18812 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18813 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18814 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18815 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18816 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18817 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18818 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18819 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18820 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18821 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18822 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18823 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18824 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18825 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18826 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18827 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18828 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18829 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18830 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18831 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18832 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18833 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18834 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18835 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18836 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18837 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18838 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18839 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18840 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18841 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18842 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18843 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18844 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18845 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18846 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18847 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18848 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18849 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18850 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18851 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18852 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18853 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18854 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18855 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18856 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18857 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18858 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18859 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18860 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18861 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18862 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18863 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18864 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18865 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18866 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18867 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18868 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18869 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18870 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18871 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18872 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18873 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18874 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18875 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18876 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18877 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18878 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18879 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18880 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18881 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18882 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18883 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18884 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18885 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18886 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18887 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18888 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18889 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18890 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18891 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18892 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18893 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18894 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18895 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18896 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18897 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18898 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18899 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18900 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18901 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18902 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18903 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18904 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18905 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18906 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18907 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18908 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18909 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18910 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18911 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18912 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18913 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18914 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18915 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18916 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18917 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18918 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18919 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18920 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18921 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18922 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18923 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18924 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18925 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18926 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18927 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18928 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18929 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18930 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18931 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18932 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18933 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18934 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18935 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18936 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18937 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18938 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18939 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18940 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18941 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18942 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18943 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18944 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18945 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18946 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18947 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18948 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18949 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18950 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18951 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18952 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18953 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18954 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18955 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18956 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18957 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18958 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18959 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18960 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18961 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18962 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18963 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18964 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18965 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18966 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18967 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18968 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18969 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18970 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18971 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18972 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18973 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18974 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18975 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18976 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18977 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18978 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18979 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18980 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18981 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18982 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18983 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18984 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18985 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18986 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18987 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18988 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18989 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18990 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18991 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18992 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18993 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18994 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18995 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18996 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18997 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18998 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			18999 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
