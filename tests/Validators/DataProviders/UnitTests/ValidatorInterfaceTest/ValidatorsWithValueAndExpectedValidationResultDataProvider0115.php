<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0115 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			115000 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115001 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115002 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115003 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115004 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115005 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115006 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115007 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115008 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115009 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115010 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115011 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115012 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115013 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115014 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115015 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115016 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115017 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115018 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115019 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115020 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115021 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115022 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115023 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115024 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115025 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115026 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115027 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115028 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115029 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115030 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115031 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115032 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115033 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115034 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115035 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115036 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115037 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115038 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115039 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115040 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115041 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115042 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115043 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115044 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115045 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115046 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115047 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115048 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115049 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115050 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115051 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115052 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115053 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115054 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115055 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115056 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115057 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115058 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115059 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115060 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115061 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115062 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115063 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115064 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115065 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115066 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115067 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115068 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115069 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115070 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115071 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115072 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115073 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115074 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115075 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115076 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115077 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115078 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115079 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115080 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115081 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115082 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115083 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115084 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115085 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115086 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115087 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115088 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115089 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115090 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115091 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115092 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115093 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115094 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115095 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115096 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115097 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115098 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115099 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115100 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115101 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115102 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115103 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115104 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115105 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115106 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115107 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115108 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115109 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115110 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115111 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115112 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115113 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115114 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115115 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115116 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115117 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115118 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115119 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115120 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115121 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115122 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115123 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115124 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115125 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115126 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115127 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115128 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115129 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115130 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115131 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115132 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115133 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115134 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115135 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115136 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115137 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115138 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115139 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115140 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115141 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115142 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115143 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115144 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115145 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115146 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115147 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115148 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115149 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115150 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115151 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115152 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115153 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115154 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115155 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115156 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115157 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115158 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115159 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115160 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115161 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115162 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115163 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115164 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115165 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115166 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115167 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115168 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115169 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115170 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115171 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115172 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115173 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115174 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115175 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115176 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115177 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115178 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115179 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115180 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115181 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115182 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115183 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115184 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115185 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115186 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115187 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115188 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115189 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115190 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115191 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115192 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115193 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115194 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115195 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115196 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115197 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115198 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115199 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115200 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115201 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115202 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115203 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115204 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115205 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115206 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115207 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115208 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115209 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115210 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115211 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115212 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115213 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115214 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115215 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115216 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115217 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115218 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115219 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115220 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115221 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115222 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115223 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115224 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115225 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115226 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115227 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115228 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115229 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115230 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115231 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115232 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115233 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115234 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115235 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115236 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115237 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115238 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115239 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115240 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115241 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115242 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115243 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115244 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115245 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115246 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115247 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115248 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115249 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115250 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115251 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115252 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115253 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115254 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115255 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115256 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115257 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115258 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115259 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115260 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115261 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115262 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115263 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115264 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115265 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115266 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115267 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115268 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115269 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115270 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115271 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115272 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115273 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115274 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115275 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115276 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115277 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115278 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115279 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115280 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115281 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115282 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115283 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115284 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115285 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115286 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115287 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115288 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115289 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115290 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115291 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115292 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115293 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115294 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115295 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115296 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115297 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115298 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115299 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115300 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115301 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115302 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115303 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115304 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115305 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115306 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115307 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115308 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115309 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115310 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115311 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115312 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115313 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115314 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115315 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115316 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115317 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115318 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115319 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115320 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115321 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115322 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115323 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115324 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115325 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115326 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115327 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115328 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115329 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115330 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115331 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115332 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115333 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115334 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115335 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115336 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115337 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115338 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115339 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115340 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115341 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115342 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115343 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115344 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115345 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115346 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115347 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115348 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115349 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115350 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115351 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115352 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115353 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115354 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115355 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115356 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115357 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115358 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115359 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115360 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115361 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115362 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115363 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115364 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115365 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115366 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115367 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115368 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115369 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115370 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115371 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115372 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115373 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115374 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115375 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115376 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115377 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115378 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115379 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115380 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115381 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115382 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115383 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115384 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115385 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115386 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115387 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115388 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115389 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115390 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115391 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115392 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115393 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115394 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115395 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115396 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115397 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115398 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115399 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115400 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115401 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115402 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115403 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115404 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115405 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115406 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115407 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115408 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115409 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115410 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115411 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115412 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115413 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115414 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115415 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115416 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115417 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115418 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115419 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115420 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115421 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115422 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115423 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115424 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115425 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115426 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115427 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115428 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115429 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115430 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115431 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115432 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115433 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115434 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115435 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115436 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115437 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115438 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115439 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115440 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115441 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115442 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115443 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115444 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115445 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115446 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115447 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115448 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115449 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115450 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115451 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115452 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115453 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115454 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115455 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115456 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115457 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115458 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115459 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115460 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115461 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115462 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115463 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115464 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115465 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115466 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115467 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115468 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115469 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115470 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115471 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115472 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115473 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115474 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115475 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115476 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115477 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115478 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115479 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115480 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115481 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115482 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115483 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115484 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115485 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115486 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115487 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115488 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115489 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115490 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115491 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115492 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115493 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115494 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115495 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115496 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115497 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115498 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115499 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115500 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115501 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115502 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115503 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115504 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115505 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115506 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115507 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115508 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115509 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115510 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115511 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115512 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115513 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115514 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115515 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115516 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115517 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115518 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115519 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115520 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115521 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115522 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115523 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115524 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115525 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115526 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115527 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115528 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115529 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115530 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115531 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115532 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115533 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115534 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115535 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115536 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115537 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115538 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115539 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115540 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115541 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115542 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115543 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115544 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115545 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115546 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115547 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115548 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115549 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115550 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115551 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115552 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115553 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115554 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115555 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115556 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115557 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115558 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115559 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115560 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115561 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115562 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115563 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115564 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115565 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115566 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115567 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115568 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115569 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115570 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115571 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115572 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115573 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115574 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115575 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115576 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115577 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115578 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115579 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115580 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115581 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115582 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115583 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115584 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115585 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115586 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115587 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115588 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115589 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115590 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115591 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115592 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115593 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115594 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115595 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115596 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115597 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115598 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115599 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115600 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115601 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115602 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115603 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115604 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115605 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115606 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115607 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115608 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115609 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115610 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115611 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115612 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115613 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115614 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115615 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115616 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115617 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115618 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115619 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115620 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115621 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115622 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115623 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115624 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115625 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115626 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115627 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115628 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115629 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115630 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115631 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115632 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115633 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115634 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115635 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115636 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115637 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115638 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115639 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115640 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115641 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115642 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115643 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115644 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115645 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115646 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115647 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115648 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115649 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115650 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115651 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115652 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115653 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115654 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115655 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115656 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115657 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115658 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115659 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115660 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115661 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115662 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115663 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115664 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115665 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115666 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115667 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115668 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115669 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115670 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115671 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115672 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115673 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115674 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115675 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115676 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115677 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115678 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115679 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115680 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115681 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115682 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115683 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115684 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115685 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115686 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115687 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115688 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115689 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115690 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115691 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115692 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115693 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115694 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115695 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115696 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115697 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115698 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115699 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115700 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115701 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115702 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115703 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115704 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115705 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115706 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115707 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115708 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115709 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115710 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115711 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115712 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115713 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115714 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115715 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115716 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115717 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115718 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115719 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115720 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115721 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115722 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115723 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115724 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115725 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115726 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115727 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115728 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115729 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115730 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115731 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115732 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115733 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115734 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115735 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115736 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115737 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115738 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115739 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115740 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115741 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115742 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115743 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115744 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115745 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115746 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115747 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115748 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115749 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115750 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115751 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115752 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115753 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115754 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115755 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115756 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115757 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115758 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115759 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115760 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115761 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115762 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115763 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115764 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115765 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115766 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115767 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115768 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115769 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115770 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115771 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115772 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115773 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115774 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115775 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115776 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115777 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115778 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115779 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115780 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115781 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115782 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115783 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115784 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115785 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115786 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115787 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115788 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115789 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115790 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115791 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115792 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115793 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115794 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115795 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115796 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115797 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115798 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115799 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115800 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115801 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115802 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115803 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115804 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115805 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115806 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115807 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115808 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115809 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115810 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115811 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115812 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115813 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115814 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115815 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115816 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115817 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115818 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115819 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115820 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115821 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115822 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115823 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115824 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115825 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115826 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115827 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115828 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115829 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115830 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115831 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115832 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115833 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115834 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115835 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115836 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115837 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115838 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115839 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115840 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115841 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115842 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115843 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115844 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115845 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115846 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115847 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115848 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115849 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115850 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115851 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115852 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115853 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115854 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115855 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115856 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115857 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115858 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115859 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115860 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115861 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115862 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115863 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115864 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115865 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115866 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115867 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115868 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115869 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115870 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115871 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115872 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115873 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115874 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115875 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115876 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115877 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115878 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115879 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115880 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115881 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115882 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115883 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115884 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115885 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115886 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115887 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115888 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115889 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115890 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115891 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115892 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115893 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115894 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115895 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115896 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115897 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115898 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115899 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115900 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115901 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115902 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115903 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115904 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115905 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115906 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115907 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115908 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115909 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115910 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115911 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115912 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115913 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115914 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115915 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115916 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115917 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115918 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115919 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115920 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115921 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115922 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115923 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115924 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115925 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115926 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115927 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115928 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115929 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115930 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115931 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115932 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115933 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115934 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115935 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115936 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115937 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115938 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115939 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115940 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115941 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115942 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115943 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115944 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115945 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115946 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115947 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115948 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115949 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115950 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115951 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115952 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115953 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115954 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115955 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115956 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115957 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115958 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115959 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115960 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115961 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115962 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115963 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115964 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115965 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115966 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115967 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115968 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115969 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115970 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115971 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115972 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115973 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115974 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115975 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115976 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115977 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115978 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115979 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115980 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115981 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115982 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115983 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115984 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115985 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115986 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115987 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115988 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115989 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115990 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115991 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115992 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115993 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115994 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115995 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115996 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115997 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115998 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115999 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
