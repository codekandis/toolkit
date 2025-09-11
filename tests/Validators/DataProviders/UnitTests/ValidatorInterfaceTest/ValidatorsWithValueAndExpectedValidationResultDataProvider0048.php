<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInterfaceNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0048 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			48000 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48001 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48002 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48003 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48004 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48005 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48006 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48007 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48008 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48009 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48010 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48011 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48012 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48013 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48014 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48015 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48016 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48017 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48018 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48019 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48020 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48021 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48022 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48023 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48024 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48025 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48026 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48027 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48028 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48029 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48030 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48031 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48032 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48033 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48034 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48035 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48036 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48037 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48038 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48039 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48040 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48041 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48042 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48043 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48044 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48045 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48046 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48047 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48048 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48049 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48050 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48051 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48052 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48053 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48054 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48055 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48056 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48057 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48058 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48059 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48060 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48061 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48062 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48063 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48064 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48065 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48066 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48067 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48068 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48069 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48070 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48071 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48072 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48073 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48074 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48075 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48076 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48077 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48078 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48079 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48080 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48081 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48082 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48083 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48084 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48085 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48086 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48087 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48088 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48089 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48090 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48091 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48092 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48093 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48094 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48095 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48096 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48097 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48098 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48099 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48100 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48101 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48102 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48103 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48104 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48105 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48106 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48107 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48108 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48109 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48110 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48111 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48112 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48113 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48114 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48115 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48116 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48117 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48118 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48119 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48120 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48121 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48122 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48123 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48124 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48125 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48126 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48127 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48128 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48129 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48130 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48131 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48132 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48133 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48134 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48135 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48136 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48137 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48138 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48139 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48140 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48141 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48142 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48143 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48144 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48145 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48146 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48147 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48148 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48149 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48150 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48151 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48152 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48153 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48154 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48155 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48156 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48157 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48158 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48159 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48160 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48161 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48162 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48163 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48164 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48165 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48166 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48167 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48168 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48169 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48170 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48171 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48172 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48173 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48174 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48175 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48176 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48177 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48178 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48179 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48180 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48181 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48182 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48183 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48184 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48185 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48186 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48187 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48188 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48189 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48190 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48191 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48192 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48193 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48194 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48195 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48196 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48197 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48198 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48199 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48200 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48201 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48202 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48203 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48204 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48205 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48206 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48207 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48208 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48209 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48210 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48211 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48212 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48213 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48214 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48215 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48216 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48217 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48218 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48219 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48220 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48221 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48222 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48223 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48224 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48225 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48226 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48227 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48228 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48229 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48230 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48231 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48232 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48233 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48234 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48235 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48236 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48237 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48238 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48239 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48240 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48241 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48242 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48243 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48244 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48245 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48246 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48247 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48248 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48249 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48250 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48251 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48252 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48253 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48254 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48255 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48256 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48257 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48258 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48259 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48260 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48261 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48262 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48263 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48264 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48265 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48266 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48267 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48268 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48269 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48270 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48271 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48272 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48273 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48274 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48275 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48276 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48277 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48278 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48279 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48280 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48281 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48282 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48283 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48284 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48285 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48286 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48287 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48288 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48289 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48290 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48291 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48292 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48293 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48294 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48295 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48296 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48297 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48298 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48299 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48300 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48301 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48302 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48303 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48304 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48305 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48306 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48307 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48308 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48309 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48310 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48311 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48312 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48313 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48314 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48315 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48316 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48317 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48318 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48319 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48320 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48321 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48322 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48323 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48324 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48325 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48326 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48327 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48328 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48329 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48330 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48331 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48332 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48333 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48334 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48335 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48336 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48337 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48338 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48339 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48340 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48341 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48342 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48343 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48344 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48345 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48346 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48347 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48348 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48349 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48350 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48351 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48352 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48353 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48354 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48355 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48356 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48357 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48358 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48359 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48360 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48361 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48362 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48363 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48364 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48365 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48366 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48367 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48368 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48369 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48370 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48371 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48372 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48373 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48374 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48375 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48376 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48377 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48378 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48379 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48380 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48381 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48382 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48383 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48384 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48385 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48386 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48387 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48388 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48389 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48390 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48391 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48392 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48393 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48394 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48395 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48396 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48397 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48398 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48399 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48400 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48401 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48402 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48403 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48404 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48405 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48406 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48407 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48408 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48409 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48410 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48411 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48412 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48413 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48414 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48415 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48416 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48417 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48418 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48419 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48420 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48421 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48422 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48423 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48424 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48425 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48426 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48427 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48428 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48429 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48430 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48431 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48432 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48433 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48434 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48435 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48436 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48437 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48438 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48439 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48440 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48441 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48442 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48443 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48444 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48445 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48446 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48447 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48448 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48449 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48450 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48451 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48452 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48453 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48454 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48455 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48456 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48457 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48458 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48459 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48460 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48461 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48462 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48463 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48464 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48465 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48466 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48467 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48468 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48469 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48470 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48471 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48472 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48473 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48474 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48475 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48476 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48477 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48478 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48479 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48480 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48481 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48482 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48483 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48484 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48485 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48486 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48487 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48488 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48489 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48490 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48491 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48492 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48493 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48494 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48495 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48496 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48497 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48498 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48499 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48500 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48501 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48502 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48503 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48504 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48505 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48506 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48507 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48508 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48509 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48510 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48511 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48512 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48513 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48514 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48515 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48516 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48517 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48518 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48519 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48520 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48521 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48522 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48523 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48524 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48525 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48526 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48527 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48528 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48529 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48530 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48531 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48532 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48533 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48534 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48535 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48536 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48537 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48538 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48539 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48540 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48541 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48542 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48543 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48544 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48545 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48546 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48547 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48548 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48549 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48550 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48551 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48552 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48553 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48554 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48555 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48556 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48557 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48558 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48559 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48560 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48561 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48562 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48563 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48564 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48565 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48566 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48567 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48568 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48569 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48570 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48571 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48572 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48573 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48574 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48575 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48576 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48577 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48578 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48579 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48580 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48581 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48582 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48583 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48584 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48585 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48586 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48587 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48588 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48589 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48590 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48591 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48592 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48593 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48594 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48595 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48596 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48597 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48598 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48599 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48600 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48601 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48602 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48603 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48604 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48605 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48606 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48607 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48608 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48609 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48610 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48611 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48612 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48613 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48614 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48615 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48616 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48617 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48618 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48619 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48620 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48621 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48622 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48623 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48624 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48625 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48626 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48627 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48628 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48629 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48630 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48631 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48632 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48633 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48634 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48635 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48636 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48637 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48638 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48639 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48640 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48641 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48642 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48643 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48644 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48645 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48646 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48647 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48648 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48649 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48650 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48651 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48652 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48653 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48654 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48655 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48656 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48657 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48658 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48659 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48660 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48661 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48662 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48663 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48664 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48665 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48666 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48667 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48668 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48669 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48670 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48671 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48672 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48673 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48674 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48675 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48676 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48677 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48678 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48679 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48680 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48681 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48682 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48683 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48684 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48685 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48686 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48687 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48688 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48689 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48690 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48691 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48692 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48693 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48694 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48695 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48696 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48697 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48698 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48699 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48700 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48701 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48702 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48703 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48704 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48705 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48706 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48707 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48708 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48709 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48710 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48711 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48712 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48713 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48714 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48715 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48716 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48717 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48718 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48719 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48720 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48721 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48722 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48723 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48724 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48725 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48726 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48727 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48728 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48729 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48730 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48731 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48732 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48733 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48734 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48735 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48736 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48737 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48738 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48739 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48740 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48741 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48742 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48743 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48744 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48745 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48746 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48747 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48748 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48749 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48750 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48751 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48752 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48753 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48754 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48755 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48756 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48757 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48758 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48759 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48760 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48761 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48762 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48763 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48764 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48765 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48766 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48767 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48768 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48769 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48770 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48771 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48772 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48773 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48774 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48775 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48776 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48777 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48778 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48779 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48780 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48781 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48782 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48783 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48784 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48785 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48786 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48787 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48788 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48789 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48790 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48791 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48792 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48793 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48794 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48795 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48796 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48797 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48798 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48799 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48800 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48801 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48802 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48803 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48804 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48805 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48806 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48807 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48808 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48809 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48810 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48811 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48812 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48813 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48814 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48815 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48816 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48817 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48818 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48819 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48820 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48821 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48822 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48823 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48824 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48825 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48826 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48827 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48828 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48829 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48830 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48831 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48832 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48833 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48834 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48835 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48836 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48837 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48838 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48839 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48840 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48841 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48842 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48843 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48844 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48845 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48846 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48847 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48848 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48849 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48850 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48851 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48852 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48853 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48854 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48855 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48856 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48857 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48858 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48859 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48860 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48861 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48862 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48863 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48864 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48865 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48866 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48867 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48868 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48869 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48870 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48871 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48872 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48873 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48874 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48875 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48876 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48877 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48878 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48879 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48880 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48881 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48882 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48883 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48884 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48885 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48886 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48887 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48888 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48889 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48890 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48891 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48892 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48893 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48894 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48895 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48896 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48897 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48898 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48899 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48900 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48901 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48902 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48903 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48904 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48905 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48906 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48907 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48908 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48909 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48910 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48911 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48912 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48913 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48914 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48915 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48916 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48917 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48918 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48919 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48920 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48921 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48922 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48923 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48924 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48925 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48926 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			48927 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48928 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48929 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48930 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48931 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48932 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48933 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48934 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48935 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48936 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48937 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48938 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48939 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48940 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48941 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48942 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48943 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48944 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48945 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48946 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48947 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48948 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48949 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48950 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48951 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48952 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48953 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48954 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48955 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48956 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48957 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48958 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48959 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48960 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48961 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48962 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48963 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48964 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48965 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48966 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48967 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48968 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48969 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48970 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48971 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48972 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48973 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48974 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48975 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48976 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48977 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48978 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48979 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48980 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48981 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48982 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48983 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48984 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48985 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48986 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48987 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48988 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48989 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48990 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48991 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48992 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48993 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48994 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48995 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48996 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48997 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48998 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			48999 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
