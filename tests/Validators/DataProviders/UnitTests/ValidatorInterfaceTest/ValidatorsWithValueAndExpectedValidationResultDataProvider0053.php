<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use CodeKandis\ToolKit\Validators\IsSubClassOfArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0053 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			53000 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53001 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53002 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53003 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53004 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53005 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53006 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53007 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53008 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53009 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53010 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53011 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53012 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53013 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53014 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53015 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53016 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53017 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53018 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53019 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53020 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53021 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53022 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53023 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53024 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53025 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53026 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53027 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53028 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53029 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53030 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53031 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53032 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53033 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53034 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53035 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53036 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53037 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53038 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53039 => [
				'validator'                => new IsStringBackedEnumNameArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53040 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53041 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53042 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53043 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53044 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53045 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53046 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53047 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53048 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53049 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53050 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53051 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53052 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53053 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53054 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53055 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53056 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53057 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53058 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53059 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53060 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53061 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53062 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53063 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53064 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53065 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53066 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53067 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53068 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53069 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53070 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53071 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53072 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53073 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53074 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53075 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53076 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53077 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53078 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53079 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53080 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53081 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53082 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53083 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53084 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53085 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53086 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53087 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53088 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53089 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53090 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53091 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53092 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53093 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53094 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53095 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53096 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53097 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53098 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53099 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53100 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53101 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53102 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53103 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53104 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53105 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53106 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53107 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53108 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53109 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53110 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53111 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53112 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53113 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53114 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53115 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53116 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53117 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53118 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53119 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53120 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53121 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53122 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53123 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53124 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53125 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53126 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53127 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53128 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53129 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53130 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53131 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53132 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53133 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53134 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53135 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53136 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53137 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53138 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53139 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53140 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53141 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53142 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53143 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53144 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53145 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53146 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53147 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53148 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53149 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53150 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53151 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53152 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53153 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53154 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53155 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53156 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53157 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53158 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53159 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53160 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53161 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53162 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53163 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53164 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53165 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53166 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53167 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53168 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53169 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53170 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53171 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53172 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53173 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53174 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53175 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53176 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53177 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53178 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53179 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53180 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53181 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53182 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53183 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53184 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53185 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53186 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53187 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53188 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53189 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53190 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53191 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53192 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53193 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53194 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53195 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53196 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53197 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53198 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53199 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53200 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53201 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53202 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53203 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53204 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53205 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53206 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53207 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53208 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53209 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53210 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53211 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53212 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53213 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53214 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53215 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53216 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53217 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53218 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53219 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53220 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53221 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53222 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53223 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53224 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53225 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53226 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53227 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53228 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53229 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53230 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53231 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53232 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53233 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53234 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53235 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53236 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53237 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53238 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53239 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53240 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53241 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53242 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53243 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53244 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53245 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53246 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53247 => [
				'validator'                => new IsStringBackedEnumNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53248 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53249 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53250 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53251 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53252 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53253 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53254 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53255 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53256 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53257 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53258 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53259 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53260 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53261 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53262 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53263 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53264 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53265 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53266 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53267 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53268 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53269 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53270 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53271 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53272 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53273 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53274 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53275 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53276 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53277 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53278 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53279 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53280 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53281 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53282 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53283 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53284 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53285 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53286 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53287 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53288 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53289 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53290 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53291 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53292 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53293 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53294 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53295 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53296 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53297 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53298 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53299 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53300 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53301 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53302 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53303 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53304 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53305 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53306 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53307 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53308 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53309 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53310 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53311 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53312 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53313 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53314 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53315 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53316 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53317 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53318 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53319 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53320 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53321 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53322 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53323 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53324 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53325 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53326 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53327 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53328 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53329 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53330 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53331 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53332 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53333 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53334 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53335 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53336 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53337 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53338 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53339 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53340 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53341 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53342 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53343 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53344 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53345 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53346 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53347 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53348 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53349 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53350 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53351 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53352 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53353 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53354 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53355 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53356 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53357 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53358 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53359 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53360 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53361 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53362 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53363 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53364 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53365 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53366 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53367 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53368 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53369 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53370 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53371 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53372 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53373 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53374 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53375 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53376 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53377 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53378 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53379 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53380 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53381 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53382 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53383 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53384 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53385 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53386 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53387 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53388 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53389 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53390 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53391 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53392 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53393 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53394 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53395 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53396 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53397 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53398 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53399 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53400 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53401 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53402 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53403 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53404 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53405 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53406 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53407 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53408 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53409 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53410 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53411 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53412 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53413 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53414 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53415 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53416 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53417 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53418 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53419 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53420 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53421 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53422 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53423 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53424 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53425 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53426 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53427 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53428 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53429 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53430 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53431 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53432 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53433 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53434 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53435 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53436 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53437 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53438 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53439 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53440 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53441 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53442 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53443 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53444 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53445 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53446 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53447 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53448 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53449 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53450 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53451 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53452 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53453 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53454 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53455 => [
				'validator'                => new IsStringBackedEnumValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53456 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53457 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53458 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53459 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53460 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53461 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53462 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53463 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53464 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53465 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53466 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53467 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53468 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53469 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53470 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53471 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53472 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53473 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53474 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53475 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53476 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53477 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53478 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53479 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53480 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53481 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53482 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53483 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53484 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53485 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53486 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53487 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53488 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53489 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53490 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53491 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53492 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53493 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53494 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53495 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53496 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53497 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53498 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53499 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53500 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53501 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53502 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53503 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53504 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53505 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53506 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53507 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53508 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53509 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53510 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53511 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53512 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53513 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53514 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53515 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53516 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53517 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53518 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53519 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53520 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53521 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53522 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53523 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53524 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53525 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53526 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53527 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53528 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53529 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53530 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53531 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53532 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53533 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53534 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53535 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53536 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53537 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53538 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53539 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53540 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53541 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53542 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53543 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53544 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53545 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53546 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53547 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53548 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53549 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53550 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53551 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53552 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53553 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53554 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53555 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53556 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53557 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53558 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53559 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53560 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53561 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53562 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53563 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53564 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53565 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53566 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53567 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53568 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53569 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53570 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53571 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53572 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53573 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53574 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53575 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53576 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53577 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53578 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53579 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53580 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53581 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53582 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53583 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53584 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53585 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53586 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53587 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53588 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53589 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53590 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53591 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53592 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53593 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53594 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53595 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53596 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53597 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53598 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53599 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53600 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53601 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53602 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53603 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53604 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53605 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53606 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53607 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53608 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53609 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53610 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53611 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53612 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53613 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53614 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53615 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53616 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53617 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53618 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53619 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53620 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53621 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53622 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53623 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53624 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53625 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53626 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53627 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53628 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53629 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53630 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53631 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53632 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53633 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53634 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53635 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53636 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53637 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53638 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53639 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53640 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53641 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53642 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53643 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53644 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53645 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53646 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53647 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53648 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53649 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53650 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53651 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53652 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53653 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53654 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53655 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53656 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53657 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53658 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53659 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53660 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53661 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53662 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53663 => [
				'validator'                => new IsStringValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53664 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53665 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53666 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53667 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53668 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53669 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53670 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53671 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53672 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53673 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53674 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53675 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53676 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53677 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53678 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53679 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53680 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53681 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53682 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53683 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53684 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53685 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53686 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53687 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53688 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53689 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53690 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53691 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53692 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53693 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53694 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53695 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53696 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53697 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53698 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53699 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53700 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53701 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53702 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53703 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53704 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53705 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53706 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53707 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53708 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53709 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53710 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53711 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53712 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53713 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53714 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53715 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53716 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53717 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53718 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53719 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53720 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53721 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53722 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53723 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53724 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53725 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53726 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53727 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53728 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53729 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53730 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53731 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53732 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53733 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53734 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53735 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53736 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53737 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53738 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53739 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53740 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53741 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53742 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53743 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53744 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53745 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53746 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53747 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53748 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53749 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53750 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53751 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53752 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53753 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53754 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53755 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53756 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53757 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53758 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53759 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53760 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53761 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53762 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53763 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53764 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53765 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53766 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53767 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53768 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53769 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53770 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53771 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53772 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53773 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53774 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53775 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53776 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53777 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53778 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53779 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53780 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53781 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53782 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53783 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53784 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53785 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53786 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53787 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53788 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53789 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53790 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53791 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53792 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53793 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53794 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53795 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53796 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53797 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53798 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53799 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53800 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53801 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53802 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53803 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53804 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53805 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53806 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53807 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53808 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53809 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53810 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53811 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53812 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53813 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53814 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53815 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53816 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53817 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53818 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53819 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53820 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53821 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53822 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53823 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53824 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53825 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53826 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53827 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53828 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53829 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53830 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53831 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53832 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53833 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53834 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53835 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53836 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53837 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53838 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53839 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53840 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53841 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53842 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53843 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53844 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53845 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53846 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53847 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53848 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53849 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53850 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53851 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53852 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53853 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53854 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53855 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53856 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53857 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53858 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53859 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53860 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53861 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53862 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53863 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53864 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53865 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53866 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53867 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53868 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53869 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53870 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53871 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53872 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53873 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53874 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53875 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53876 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53877 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53878 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53879 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53880 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53881 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53882 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53883 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53884 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53885 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53886 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53887 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53888 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53889 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53890 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53891 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53892 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53893 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53894 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53895 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53896 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53897 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53898 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53899 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53900 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53901 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53902 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53903 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53904 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53905 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53906 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53907 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53908 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53909 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53910 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53911 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53912 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53913 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53914 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53915 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53916 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53917 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53918 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53919 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53920 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53921 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53922 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53923 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53924 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53925 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53926 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53927 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53928 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53929 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53930 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53931 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53932 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53933 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53934 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53935 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53936 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53937 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53938 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53939 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53940 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53941 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53942 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53943 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53944 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53945 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53946 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53947 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53948 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53949 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53950 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53951 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53952 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53953 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53954 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53955 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53956 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53957 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53958 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53959 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53960 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53961 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53962 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53963 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53964 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53965 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53966 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53967 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53968 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53969 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53970 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53971 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53972 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53973 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53974 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53975 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53976 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53977 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53978 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53979 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53980 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53981 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53982 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53983 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53984 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53985 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53986 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53987 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53988 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53989 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53990 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53991 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53992 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53993 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53994 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53995 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53996 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53997 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			53998 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			53999 => [
				'validator'                => new IsSubClassOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
