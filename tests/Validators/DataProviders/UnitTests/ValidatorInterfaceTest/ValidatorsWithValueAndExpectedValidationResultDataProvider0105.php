<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceOrClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceOrClassNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0105 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			105000 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105001 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105002 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105003 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105004 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105005 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105006 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105007 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105008 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105009 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105010 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105011 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105012 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105013 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105014 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105015 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105016 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105017 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105018 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105019 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105020 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105021 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105022 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105023 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105024 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105025 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105026 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105027 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105028 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105029 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105030 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105031 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105032 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105033 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105034 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105035 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105036 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105037 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105038 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105039 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105040 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105041 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105042 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105043 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105044 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105045 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105046 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105047 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105048 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105049 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105050 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105051 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105052 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105053 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105054 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105055 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105056 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105057 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105058 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105059 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105060 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105061 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105062 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105063 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105064 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105065 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105066 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105067 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105068 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105069 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105070 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105071 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105072 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105073 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105074 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105075 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105076 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105077 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105078 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105079 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105080 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105081 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105082 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105083 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105084 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105085 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105086 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105087 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105088 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105089 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105090 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105091 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105092 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105093 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105094 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105095 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105096 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105097 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105098 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105099 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105100 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105101 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105102 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105103 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105104 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105105 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105106 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105107 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105108 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105109 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105110 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105111 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105112 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105113 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105114 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105115 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105116 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105117 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105118 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105119 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105120 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105121 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105122 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105123 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105124 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105125 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105126 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105127 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105128 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105129 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105130 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105131 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105132 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105133 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105134 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105135 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105136 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105137 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105138 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105139 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105140 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105141 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105142 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105143 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105144 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105145 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105146 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105147 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105148 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105149 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105150 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105151 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105152 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105153 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105154 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105155 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105156 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105157 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105158 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105159 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105160 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105161 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105162 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105163 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105164 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105165 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105166 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105167 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105168 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105169 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105170 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105171 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105172 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105173 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105174 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105175 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105176 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105177 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105178 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105179 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105180 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105181 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105182 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105183 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105184 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105185 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105186 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105187 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105188 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105189 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105190 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105191 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105192 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105193 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105194 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105195 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105196 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105197 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105198 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105199 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105200 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105201 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105202 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105203 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105204 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105205 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105206 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105207 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105208 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105209 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105210 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105211 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105212 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105213 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105214 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105215 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105216 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105217 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105218 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105219 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105220 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105221 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105222 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105223 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105224 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105225 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105226 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105227 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105228 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105229 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105230 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105231 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105232 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105233 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105234 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105235 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105236 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105237 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105238 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105239 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105240 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105241 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105242 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105243 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105244 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105245 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105246 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105247 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105248 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105249 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105250 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105251 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105252 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105253 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105254 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105255 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105256 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105257 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105258 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105259 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105260 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105261 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105262 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105263 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105264 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105265 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105266 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105267 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105268 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105269 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105270 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105271 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105272 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105273 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105274 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105275 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105276 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105277 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105278 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105279 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105280 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105281 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105282 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105283 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105284 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105285 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105286 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105287 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105288 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105289 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105290 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105291 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105292 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105293 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105294 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105295 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105296 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105297 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105298 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105299 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105300 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105301 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105302 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105303 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105304 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105305 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105306 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105307 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105308 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105309 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105310 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105311 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105312 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105313 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105314 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105315 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105316 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105317 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105318 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105319 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105320 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105321 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105322 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105323 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105324 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105325 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105326 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105327 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105328 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105329 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105330 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105331 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105332 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105333 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105334 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105335 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105336 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105337 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105338 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105339 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105340 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105341 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105342 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105343 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105344 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105345 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105346 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105347 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105348 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105349 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105350 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105351 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105352 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105353 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105354 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105355 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105356 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105357 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105358 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105359 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105360 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105361 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105362 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105363 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105364 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105365 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105366 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105367 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105368 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105369 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105370 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105371 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105372 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105373 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105374 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105375 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105376 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105377 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105378 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105379 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105380 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105381 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105382 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105383 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105384 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105385 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105386 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105387 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105388 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105389 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105390 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105391 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105392 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105393 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105394 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105395 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105396 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105397 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105398 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105399 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105400 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105401 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105402 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105403 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105404 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105405 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105406 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105407 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105408 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105409 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105410 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105411 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105412 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105413 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105414 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105415 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105416 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105417 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105418 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105419 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105420 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105421 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105422 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105423 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105424 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105425 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105426 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105427 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105428 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105429 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105430 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105431 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105432 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105433 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105434 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105435 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105436 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105437 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105438 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105439 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105440 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105441 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105442 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105443 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105444 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105445 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105446 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105447 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105448 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105449 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105450 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105451 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105452 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105453 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105454 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105455 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105456 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105457 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105458 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105459 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105460 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105461 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105462 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105463 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105464 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105465 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105466 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105467 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105468 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105469 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105470 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105471 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105472 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105473 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105474 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105475 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105476 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105477 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105478 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105479 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105480 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105481 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105482 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105483 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105484 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105485 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105486 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105487 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105488 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105489 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105490 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105491 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105492 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105493 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105494 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105495 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105496 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105497 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105498 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105499 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105500 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105501 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105502 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105503 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105504 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105505 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105506 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105507 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105508 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105509 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105510 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105511 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105512 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105513 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105514 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105515 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105516 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105517 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105518 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105519 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105520 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105521 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105522 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105523 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105524 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105525 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105526 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105527 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105528 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105529 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105530 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105531 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105532 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105533 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105534 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105535 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105536 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105537 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105538 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105539 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105540 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105541 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105542 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105543 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105544 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105545 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105546 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105547 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105548 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105549 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105550 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105551 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105552 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105553 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105554 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105555 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105556 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105557 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105558 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105559 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105560 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105561 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105562 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105563 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105564 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105565 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105566 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105567 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105568 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105569 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105570 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105571 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105572 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105573 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105574 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105575 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105576 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105577 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105578 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105579 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105580 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105581 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105582 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105583 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105584 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105585 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105586 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105587 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105588 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105589 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105590 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105591 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105592 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105593 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105594 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105595 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105596 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105597 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105598 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105599 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105600 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105601 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105602 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105603 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105604 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105605 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105606 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105607 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105608 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105609 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105610 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105611 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105612 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105613 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105614 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105615 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105616 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105617 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105618 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105619 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105620 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105621 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105622 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105623 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105624 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105625 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105626 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105627 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105628 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105629 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105630 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105631 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105632 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105633 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105634 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105635 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105636 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105637 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105638 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105639 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105640 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105641 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105642 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105643 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105644 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105645 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105646 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105647 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105648 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105649 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105650 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105651 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105652 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105653 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105654 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105655 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105656 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105657 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105658 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105659 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105660 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105661 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105662 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105663 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105664 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105665 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105666 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105667 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105668 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105669 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105670 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105671 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105672 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105673 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105674 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105675 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105676 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105677 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105678 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105679 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105680 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105681 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105682 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105683 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105684 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105685 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105686 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105687 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105688 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105689 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105690 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105691 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105692 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105693 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105694 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105695 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105696 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105697 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105698 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105699 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105700 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105701 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105702 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105703 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105704 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105705 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105706 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105707 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105708 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105709 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105710 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105711 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105712 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105713 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105714 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105715 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105716 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105717 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105718 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105719 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105720 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105721 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105722 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105723 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105724 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105725 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105726 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105727 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105728 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105729 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105730 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105731 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105732 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105733 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105734 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105735 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105736 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105737 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105738 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105739 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105740 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105741 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105742 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105743 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105744 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105745 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105746 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105747 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105748 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105749 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105750 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105751 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105752 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105753 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105754 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105755 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105756 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105757 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105758 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105759 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105760 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105761 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105762 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105763 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105764 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105765 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105766 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105767 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105768 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105769 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105770 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105771 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105772 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105773 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105774 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105775 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105776 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105777 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105778 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105779 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105780 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105781 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105782 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105783 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105784 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105785 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105786 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105787 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105788 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105789 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105790 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105791 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105792 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105793 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105794 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105795 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105796 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105797 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105798 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105799 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105800 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105801 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105802 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105803 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105804 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105805 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105806 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105807 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105808 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105809 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105810 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105811 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105812 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105813 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105814 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105815 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105816 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105817 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105818 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105819 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105820 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105821 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105822 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105823 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105824 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105825 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105826 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105827 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105828 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105829 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105830 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105831 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105832 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105833 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105834 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105835 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105836 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105837 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105838 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105839 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105840 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105841 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105842 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105843 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105844 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105845 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105846 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105847 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105848 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105849 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105850 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105851 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105852 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105853 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105854 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105855 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105856 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105857 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105858 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105859 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105860 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105861 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105862 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105863 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105864 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105865 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105866 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105867 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105868 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105869 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105870 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105871 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105872 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105873 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105874 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105875 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105876 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105877 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105878 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105879 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105880 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105881 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105882 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105883 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105884 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105885 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105886 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105887 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105888 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105889 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105890 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105891 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105892 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105893 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105894 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105895 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105896 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105897 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105898 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105899 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105900 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105901 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105902 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105903 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105904 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105905 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105906 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105907 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105908 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105909 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105910 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105911 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105912 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105913 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105914 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105915 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105916 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105917 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105918 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105919 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105920 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105921 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105922 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105923 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105924 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105925 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105926 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105927 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105928 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105929 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105930 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105931 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105932 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105933 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105934 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105935 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105936 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105937 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105938 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105939 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105940 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105941 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105942 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105943 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105944 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105945 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105946 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105947 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105948 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105949 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105950 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105951 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105952 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105953 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105954 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105955 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105956 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105957 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105958 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105959 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105960 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105961 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105962 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105963 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105964 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105965 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105966 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105967 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105968 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105969 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105970 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105971 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105972 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105973 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105974 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105975 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105976 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105977 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105978 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105979 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105980 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105981 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105982 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105983 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105984 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105985 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105986 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105987 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105988 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105989 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105990 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105991 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105992 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105993 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105994 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105995 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105996 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105997 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105998 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105999 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
