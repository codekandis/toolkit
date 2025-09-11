<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedObjectValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider023 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			115000 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115001 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115002 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115003 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115004 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115005 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115006 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115007 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115008 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115009 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115010 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115011 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115012 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115013 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115014 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115015 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115016 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115017 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115018 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115019 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115020 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115021 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115022 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115023 => [
				'validator'                => new MappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115024 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115025 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115026 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115027 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115028 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115029 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115030 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115031 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115032 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115033 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115034 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115035 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115036 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115037 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115038 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115039 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115040 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115041 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115042 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115043 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115044 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115045 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115046 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115047 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115048 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115049 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115050 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115051 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115052 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115053 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115054 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115055 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115056 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115057 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115058 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115059 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115060 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115061 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115062 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115063 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115064 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115065 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115066 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115067 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115068 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115069 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115070 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115071 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115072 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115073 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115074 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115075 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115076 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115077 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115078 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115079 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115080 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115081 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115082 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115083 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115084 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115085 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115086 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115087 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115088 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115089 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115090 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115091 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115092 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115093 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115094 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115095 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115096 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115097 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115098 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115099 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115100 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115101 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115102 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115103 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115104 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115105 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115106 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115107 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115108 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115109 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115110 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115111 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115112 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115113 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115114 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115115 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115116 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115117 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115118 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115119 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115120 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115121 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115122 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115123 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115124 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115125 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115126 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115127 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115128 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115129 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115130 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115131 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115132 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115133 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115134 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115135 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115136 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115137 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115138 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115139 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115140 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115141 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115142 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115143 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115144 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115145 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115146 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115147 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115148 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115149 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115150 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115151 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115152 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115153 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115154 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115155 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115156 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115157 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115158 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115159 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115160 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115161 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115162 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115163 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115164 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115165 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115166 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115167 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115168 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115169 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115170 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115171 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115172 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115173 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115174 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115175 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115176 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115177 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115178 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115179 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115180 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115181 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115182 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115183 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115184 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115185 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115186 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115187 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115188 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115189 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115190 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115191 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115192 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115193 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115194 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115195 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115196 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115197 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115198 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115199 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115200 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115201 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115202 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115203 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115204 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115205 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115206 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115207 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115208 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115209 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115210 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115211 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115212 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115213 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115214 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115215 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115216 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115217 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115218 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115219 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115220 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115221 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115222 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115223 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115224 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115225 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115226 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115227 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115228 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115229 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115230 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115231 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115232 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115233 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115234 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115235 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115236 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115237 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115238 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115239 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115240 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115241 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115242 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115243 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115244 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115245 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115246 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115247 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115248 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115249 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115250 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115251 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115252 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115253 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115254 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115255 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115256 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115257 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115258 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115259 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115260 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115261 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115262 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115263 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115264 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115265 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115266 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115267 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115268 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115269 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115270 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115271 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115272 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115273 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115274 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115275 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115276 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115277 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115278 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115279 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115280 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115281 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115282 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115283 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115284 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115285 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115286 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115287 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115288 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115289 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115290 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115291 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115292 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115293 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115294 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115295 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115296 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115297 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115298 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115299 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115300 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115301 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115302 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115303 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115304 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115305 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115306 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115307 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115308 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115309 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115310 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115311 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115312 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115313 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115314 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115315 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115316 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115317 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115318 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115319 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115320 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115321 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115322 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115323 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115324 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115325 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115326 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115327 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115328 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115329 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115330 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115331 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115332 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115333 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115334 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115335 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115336 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115337 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115338 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115339 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115340 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115341 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115342 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115343 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115344 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115345 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115346 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115347 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115348 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115349 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115350 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115351 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115352 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115353 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115354 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115355 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115356 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115357 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115358 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115359 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115360 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115361 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115362 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115363 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115364 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115365 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115366 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115367 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115368 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115369 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115370 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115371 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115372 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115373 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115374 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115375 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115376 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115377 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115378 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115379 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115380 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115381 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115382 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115383 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115384 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115385 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115386 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115387 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115388 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115389 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115390 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115391 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115392 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115393 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115394 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115395 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115396 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115397 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115398 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115399 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115400 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115401 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115402 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115403 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115404 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115405 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115406 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115407 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115408 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115409 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115410 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115411 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115412 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115413 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115414 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115415 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115416 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115417 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115418 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115419 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115420 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115421 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115422 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115423 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115424 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115425 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115426 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115427 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115428 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115429 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115430 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115431 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115432 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115433 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115434 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115435 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115436 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115437 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115438 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115439 => [
				'validator'                => new MappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115440 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115441 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115442 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115443 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115444 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115445 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115446 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115447 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115448 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115449 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115450 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115451 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115452 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115453 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115454 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115455 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115456 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115457 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115458 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115459 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115460 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115461 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115462 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115463 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115464 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115465 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115466 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115467 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115468 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115469 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115470 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115471 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115472 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115473 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115474 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115475 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115476 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115477 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115478 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115479 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115480 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115481 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115482 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115483 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115484 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115485 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115486 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115487 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115488 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115489 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115490 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115491 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115492 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115493 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115494 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115495 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115496 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115497 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115498 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115499 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115500 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115501 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115502 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115503 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115504 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115505 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115506 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115507 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115508 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115509 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115510 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115511 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115512 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115513 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115514 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115515 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115516 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115517 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115518 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115519 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115520 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115521 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115522 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115523 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115524 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115525 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115526 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115527 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115528 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115529 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115530 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115531 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115532 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115533 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115534 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115535 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115536 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115537 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115538 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115539 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115540 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115541 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115542 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115543 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115544 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115545 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115546 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115547 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115548 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115549 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115550 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115551 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115552 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115553 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115554 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115555 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115556 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115557 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115558 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115559 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115560 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115561 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115562 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115563 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115564 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115565 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115566 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115567 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115568 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115569 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115570 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115571 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115572 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115573 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115574 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115575 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115576 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115577 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115578 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115579 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115580 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115581 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115582 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115583 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115584 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115585 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115586 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115587 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115588 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115589 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115590 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115591 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115592 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115593 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115594 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115595 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115596 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115597 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115598 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115599 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115600 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115601 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115602 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115603 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115604 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115605 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115606 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115607 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115608 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115609 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115610 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115611 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115612 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115613 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115614 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115615 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115616 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115617 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115618 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115619 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115620 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115621 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115622 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115623 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115624 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115625 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115626 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115627 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115628 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115629 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115630 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115631 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115632 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115633 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115634 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115635 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115636 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115637 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115638 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115639 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115640 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115641 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115642 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115643 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115644 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115645 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115646 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115647 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115648 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115649 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115650 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115651 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115652 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115653 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115654 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115655 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115656 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115657 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115658 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115659 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115660 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115661 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115662 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115663 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115664 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115665 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115666 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115667 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115668 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115669 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115670 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115671 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115672 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115673 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115674 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115675 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115676 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115677 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115678 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115679 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115680 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115681 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115682 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115683 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115684 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115685 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115686 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115687 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115688 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115689 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115690 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115691 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115692 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115693 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115694 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115695 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115696 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115697 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115698 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115699 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115700 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115701 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115702 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115703 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115704 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115705 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115706 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115707 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115708 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115709 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115710 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115711 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115712 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115713 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115714 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115715 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115716 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115717 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115718 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115719 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115720 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115721 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115722 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115723 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115724 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115725 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115726 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115727 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115728 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115729 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115730 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115731 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115732 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115733 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115734 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115735 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115736 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115737 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115738 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115739 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115740 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115741 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115742 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115743 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115744 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115745 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115746 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115747 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115748 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115749 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115750 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115751 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115752 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115753 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115754 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115755 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115756 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115757 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115758 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115759 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115760 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115761 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115762 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115763 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115764 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115765 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115766 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115767 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115768 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115769 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115770 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115771 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115772 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115773 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115774 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115775 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115776 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115777 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115778 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115779 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115780 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115781 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115782 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115783 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115784 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115785 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115786 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115787 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115788 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115789 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115790 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115791 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115792 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115793 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115794 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115795 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115796 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115797 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115798 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115799 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115800 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115801 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115802 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115803 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115804 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115805 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115806 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115807 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115808 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115809 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115810 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115811 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115812 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115813 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115814 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115815 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115816 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115817 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115818 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115819 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115820 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115821 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115822 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115823 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115824 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115825 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115826 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115827 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115828 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115829 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115830 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115831 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115832 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115833 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115834 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115835 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115836 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115837 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115838 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115839 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115840 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115841 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115842 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115843 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115844 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115845 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115846 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115847 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115848 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115849 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115850 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115851 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115852 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115853 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115854 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115855 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115856 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			115857 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115858 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115859 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115860 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115861 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115862 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115863 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115864 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115865 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115866 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115867 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115868 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115869 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115870 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115871 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115872 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115873 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115874 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115875 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115876 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115877 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115878 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115879 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115880 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115881 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115882 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115883 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115884 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115885 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115886 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115887 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115888 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115889 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115890 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115891 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115892 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115893 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115894 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115895 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115896 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115897 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115898 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115899 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115900 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115901 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115902 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115903 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115904 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115905 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115906 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115907 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115908 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115909 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115910 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115911 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115912 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115913 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115914 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115915 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115916 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115917 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115918 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115919 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115920 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115921 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115922 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115923 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115924 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115925 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115926 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115927 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115928 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115929 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115930 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115931 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115932 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115933 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115934 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115935 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115936 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115937 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115938 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115939 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115940 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115941 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115942 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115943 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115944 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115945 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115946 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115947 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115948 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115949 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115950 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115951 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115952 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115953 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115954 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115955 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115956 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115957 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115958 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115959 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115960 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115961 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115962 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115963 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115964 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115965 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115966 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115967 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115968 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115969 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115970 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115971 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115972 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115973 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115974 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115975 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115976 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115977 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115978 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115979 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115980 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115981 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115982 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115983 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115984 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115985 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115986 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115987 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115988 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115989 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115990 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115991 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115992 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115993 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115994 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115995 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115996 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115997 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115998 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			115999 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116000 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116001 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116002 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116003 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116004 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116005 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116006 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116007 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116008 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116009 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116010 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116011 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116012 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116013 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116014 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116015 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116016 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116017 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116018 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116019 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116020 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116021 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116022 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116023 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116024 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116025 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116026 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116027 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116028 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116029 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116030 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116031 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116032 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116033 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116034 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116035 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116036 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116037 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116038 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116039 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116040 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116041 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116042 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116043 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116044 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116045 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116046 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116047 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116048 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116049 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116050 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116051 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116052 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116053 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116054 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116055 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116056 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116057 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116058 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116059 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116060 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116061 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116062 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116063 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116064 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116065 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116066 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116067 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116068 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116069 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116070 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116071 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116072 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116073 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116074 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116075 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116076 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116077 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116078 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116079 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116080 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116081 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116082 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116083 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116084 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116085 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116086 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116087 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116088 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116089 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116090 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116091 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116092 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116093 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116094 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116095 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116096 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116097 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116098 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116099 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116100 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116101 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116102 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116103 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116104 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116105 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116106 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116107 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116108 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116109 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116110 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116111 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116112 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116113 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116114 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116115 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116116 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116117 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116118 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116119 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116120 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116121 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116122 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116123 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116124 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116125 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116126 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116127 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116128 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116129 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116130 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116131 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116132 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116133 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116134 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116135 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116136 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116137 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116138 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116139 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116140 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116141 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116142 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116143 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116144 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116145 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116146 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116147 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116148 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116149 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116150 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116151 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116152 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116153 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116154 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116155 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116156 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116157 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116158 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116159 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116160 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116161 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116162 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116163 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116164 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116165 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116166 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116167 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116168 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116169 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116170 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116171 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116172 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116173 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116174 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116175 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116176 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116177 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116178 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116179 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116180 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116181 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116182 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116183 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116184 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116185 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116186 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116187 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116188 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116189 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116190 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116191 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116192 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116193 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116194 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116195 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116196 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116197 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116198 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116199 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116200 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116201 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116202 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116203 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116204 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116205 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116206 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116207 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116208 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116209 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116210 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116211 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116212 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116213 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116214 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116215 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116216 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116217 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116218 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116219 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116220 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116221 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116222 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116223 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116224 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116225 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116226 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116227 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116228 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116229 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116230 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116231 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116232 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116233 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116234 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116235 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116236 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116237 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116238 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116239 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116240 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116241 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116242 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116243 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116244 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116245 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116246 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116247 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116248 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116249 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116250 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116251 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116252 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116253 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116254 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116255 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116256 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116257 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116258 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116259 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116260 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116261 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116262 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116263 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116264 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116265 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116266 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116267 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116268 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116269 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116270 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116271 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116272 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116273 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116274 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116275 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116276 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116277 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116278 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116279 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116280 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116281 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116282 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116283 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116284 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116285 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116286 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116287 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116288 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116289 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116290 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116291 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116292 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116293 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116294 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116295 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116296 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116297 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116298 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116299 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116300 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116301 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116302 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116303 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116304 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116305 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116306 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116307 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116308 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116309 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116310 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116311 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116312 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116313 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116314 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116315 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116316 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116317 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116318 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116319 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116320 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116321 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116322 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116323 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116324 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116325 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116326 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116327 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116328 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116329 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116330 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116331 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116332 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116333 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116334 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116335 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116336 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116337 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116338 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116339 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116340 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116341 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116342 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116343 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116344 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116345 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116346 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116347 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116348 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116349 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116350 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116351 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116352 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116353 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116354 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116355 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116356 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116357 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116358 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116359 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116360 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116361 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116362 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116363 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116364 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116365 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116366 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116367 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116368 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116369 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116370 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116371 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116372 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116373 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116374 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116375 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116376 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116377 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116378 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116379 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116380 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116381 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116382 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116383 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116384 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116385 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116386 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116387 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116388 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116389 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116390 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116391 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116392 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116393 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116394 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116395 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116396 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116397 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116398 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116399 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116400 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116401 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116402 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116403 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116404 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116405 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116406 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116407 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116408 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116409 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116410 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116411 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116412 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116413 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116414 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116415 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116416 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116417 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116418 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116419 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116420 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116421 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116422 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116423 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116424 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116425 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116426 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116427 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116428 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116429 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116430 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116431 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116432 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116433 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116434 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116435 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116436 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116437 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116438 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116439 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116440 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116441 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116442 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116443 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116444 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116445 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116446 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116447 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116448 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116449 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116450 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116451 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116452 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116453 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116454 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116455 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116456 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116457 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116458 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116459 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116460 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116461 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116462 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116463 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116464 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116465 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116466 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116467 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116468 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116469 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116470 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116471 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116472 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116473 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116474 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116475 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116476 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116477 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116478 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116479 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116480 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116481 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116482 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116483 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116484 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116485 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116486 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116487 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116488 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116489 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116490 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116491 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116492 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116493 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116494 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116495 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116496 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116497 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116498 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116499 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116500 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116501 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116502 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116503 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116504 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116505 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116506 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116507 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116508 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116509 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116510 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116511 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116512 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116513 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116514 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116515 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116516 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116517 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116518 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116519 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116520 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116521 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116522 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116523 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116524 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116525 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116526 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116527 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116528 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116529 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116530 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116531 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116532 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116533 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116534 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116535 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116536 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116537 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116538 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116539 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116540 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116541 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116542 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116543 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116544 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116545 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116546 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116547 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116548 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116549 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116550 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116551 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116552 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116553 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116554 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116555 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116556 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116557 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116558 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116559 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116560 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116561 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116562 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116563 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116564 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116565 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116566 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116567 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116568 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116569 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116570 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116571 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116572 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116573 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116574 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116575 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116576 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116577 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116578 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116579 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116580 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116581 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116582 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116583 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116584 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116585 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116586 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116587 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116588 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116589 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116590 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116591 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116592 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116593 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116594 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116595 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116596 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116597 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116598 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116599 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116600 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116601 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116602 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116603 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116604 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116605 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116606 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116607 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116608 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116609 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116610 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116611 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116612 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116613 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116614 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116615 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116616 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116617 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116618 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116619 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116620 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116621 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116622 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116623 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116624 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116625 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116626 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116627 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116628 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116629 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116630 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116631 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116632 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116633 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116634 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116635 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116636 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116637 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116638 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116639 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116640 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116641 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116642 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116643 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116644 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116645 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116646 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116647 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116648 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116649 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116650 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116651 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116652 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116653 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116654 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116655 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116656 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116657 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116658 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116659 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116660 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116661 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116662 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116663 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116664 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116665 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116666 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116667 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116668 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116669 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116670 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116671 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116672 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116673 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116674 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116675 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116676 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116677 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116678 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116679 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116680 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116681 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116682 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116683 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116684 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116685 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116686 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116687 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116688 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116689 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116690 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116691 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116692 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116693 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116694 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116695 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116696 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116697 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116698 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116699 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116700 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116701 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116702 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116703 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116704 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116705 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116706 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116707 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116708 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116709 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116710 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116711 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116712 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116713 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116714 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116715 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116716 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116717 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116718 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116719 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116720 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116721 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116722 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116723 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116724 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116725 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116726 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116727 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116728 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116729 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116730 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116731 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116732 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116733 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116734 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116735 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116736 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116737 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116738 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116739 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116740 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116741 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116742 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116743 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116744 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116745 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116746 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116747 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116748 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116749 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116750 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116751 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116752 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116753 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116754 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116755 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116756 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116757 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116758 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116759 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116760 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116761 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116762 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116763 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116764 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116765 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116766 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116767 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116768 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116769 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116770 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116771 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116772 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116773 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116774 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116775 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116776 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116777 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116778 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116779 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116780 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116781 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116782 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116783 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116784 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116785 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116786 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116787 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116788 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116789 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116790 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116791 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116792 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116793 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116794 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116795 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116796 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116797 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116798 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116799 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116800 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116801 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116802 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116803 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116804 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116805 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116806 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116807 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116808 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116809 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116810 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116811 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116812 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116813 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116814 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116815 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116816 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116817 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116818 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116819 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116820 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116821 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116822 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116823 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116824 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116825 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116826 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116827 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116828 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116829 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116830 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116831 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116832 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116833 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116834 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116835 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116836 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116837 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116838 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116839 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116840 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116841 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116842 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116843 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116844 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116845 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116846 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116847 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116848 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116849 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116850 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116851 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116852 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116853 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116854 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116855 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116856 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116857 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116858 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116859 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116860 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116861 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116862 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116863 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116864 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116865 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116866 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116867 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116868 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116869 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116870 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116871 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116872 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116873 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116874 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116875 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116876 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116877 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116878 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116879 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116880 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116881 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116882 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116883 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116884 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116885 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116886 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116887 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116888 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116889 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116890 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116891 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116892 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116893 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116894 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116895 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116896 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			116897 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116898 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116899 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116900 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116901 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116902 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116903 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116904 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116905 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116906 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116907 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116908 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116909 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116910 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116911 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116912 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116913 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116914 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116915 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116916 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116917 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116918 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116919 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116920 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116921 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116922 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116923 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116924 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116925 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116926 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116927 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116928 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116929 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116930 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116931 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116932 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116933 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116934 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116935 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116936 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116937 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116938 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116939 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116940 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116941 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116942 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116943 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116944 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116945 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116946 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116947 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116948 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116949 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116950 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116951 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116952 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116953 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116954 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116955 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116956 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116957 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116958 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116959 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116960 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116961 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116962 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116963 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116964 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116965 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116966 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116967 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116968 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116969 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116970 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116971 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116972 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116973 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116974 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116975 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116976 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116977 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116978 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116979 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116980 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116981 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116982 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116983 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116984 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116985 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116986 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116987 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116988 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116989 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116990 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116991 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116992 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116993 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116994 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116995 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116996 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116997 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116998 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			116999 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117000 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117001 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117002 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117003 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117004 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117005 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117006 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117007 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117008 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117009 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117010 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117011 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117012 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117013 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117014 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117015 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117016 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117017 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117018 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117019 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117020 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117021 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117022 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117023 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117024 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117025 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117026 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117027 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117028 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117029 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117030 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117031 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117032 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117033 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117034 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117035 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117036 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117037 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117038 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117039 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117040 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117041 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117042 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117043 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117044 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117045 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117046 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117047 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117048 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117049 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117050 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117051 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117052 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117053 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117054 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117055 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117056 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117057 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117058 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117059 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117060 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117061 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117062 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117063 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117064 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117065 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117066 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117067 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117068 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117069 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117070 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117071 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117072 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117073 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117074 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117075 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117076 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117077 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117078 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117079 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117080 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117081 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117082 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117083 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117084 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117085 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117086 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117087 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117088 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117089 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117090 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117091 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117092 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117093 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117094 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117095 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117096 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117097 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117098 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117099 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117100 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117101 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117102 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117103 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117104 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117105 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117106 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117107 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117108 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117109 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117110 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117111 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117112 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117113 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117114 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117115 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117116 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117117 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117118 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117119 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117120 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117121 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117122 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117123 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117124 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117125 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117126 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117127 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117128 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117129 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117130 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117131 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117132 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117133 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117134 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117135 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117136 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117137 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117138 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117139 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117140 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117141 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117142 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117143 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117144 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117145 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117146 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117147 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117148 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117149 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117150 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117151 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117152 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117153 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117154 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117155 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117156 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117157 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117158 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117159 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117160 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117161 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117162 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117163 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117164 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117165 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117166 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117167 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117168 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117169 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117170 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117171 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117172 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117173 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117174 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117175 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117176 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117177 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117178 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117179 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117180 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117181 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117182 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117183 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117184 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117185 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117186 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117187 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117188 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117189 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117190 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117191 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117192 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117193 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117194 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117195 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117196 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117197 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117198 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117199 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117200 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117201 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117202 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117203 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117204 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117205 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117206 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117207 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117208 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117209 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117210 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117211 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117212 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117213 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117214 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117215 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117216 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117217 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117218 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117219 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117220 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117221 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117222 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117223 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117224 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117225 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117226 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117227 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117228 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117229 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117230 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117231 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117232 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117233 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117234 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117235 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117236 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117237 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117238 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117239 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117240 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117241 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117242 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117243 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117244 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117245 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117246 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117247 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117248 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117249 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117250 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117251 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117252 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117253 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117254 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117255 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117256 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117257 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117258 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117259 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117260 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117261 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117262 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117263 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117264 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117265 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117266 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117267 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117268 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117269 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117270 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117271 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117272 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117273 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117274 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117275 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117276 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117277 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117278 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117279 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117280 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117281 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117282 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117283 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117284 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117285 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117286 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117287 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117288 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117289 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117290 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117291 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117292 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117293 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117294 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117295 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117296 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117297 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117298 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117299 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117300 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117301 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117302 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117303 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117304 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117305 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117306 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117307 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117308 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117309 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117310 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117311 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117312 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117313 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117314 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117315 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117316 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117317 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117318 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117319 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117320 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117321 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117322 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117323 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117324 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117325 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117326 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117327 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117328 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117329 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117330 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117331 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117332 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117333 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117334 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117335 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117336 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117337 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117338 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117339 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117340 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117341 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117342 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117343 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117344 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117345 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117346 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117347 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117348 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117349 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117350 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117351 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117352 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117353 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117354 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117355 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117356 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117357 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117358 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117359 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117360 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117361 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117362 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117363 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117364 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117365 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117366 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117367 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117368 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117369 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117370 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117371 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117372 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117373 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117374 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117375 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117376 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117377 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117378 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117379 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117380 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117381 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117382 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117383 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117384 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117385 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117386 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117387 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117388 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117389 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117390 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117391 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117392 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117393 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117394 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117395 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117396 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117397 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117398 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117399 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117400 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117401 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117402 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117403 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117404 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117405 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117406 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117407 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117408 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117409 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117410 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117411 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117412 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117413 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117414 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117415 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117416 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117417 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117418 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117419 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117420 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117421 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117422 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117423 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117424 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117425 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117426 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117427 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117428 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117429 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117430 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117431 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117432 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117433 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117434 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117435 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117436 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117437 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117438 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117439 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117440 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117441 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117442 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117443 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117444 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117445 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117446 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117447 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117448 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117449 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117450 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117451 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117452 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117453 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117454 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117455 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117456 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117457 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117458 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117459 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117460 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117461 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117462 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117463 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117464 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117465 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117466 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117467 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117468 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117469 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117470 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117471 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117472 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117473 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117474 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117475 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117476 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117477 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117478 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117479 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117480 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117481 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117482 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117483 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117484 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117485 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117486 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117487 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117488 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117489 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117490 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117491 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117492 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117493 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117494 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117495 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117496 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117497 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117498 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117499 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117500 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117501 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117502 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117503 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117504 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117505 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117506 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117507 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117508 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117509 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117510 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117511 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117512 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117513 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117514 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117515 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117516 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117517 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117518 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117519 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117520 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117521 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117522 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117523 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117524 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117525 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117526 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117527 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117528 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117529 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117530 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117531 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117532 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117533 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117534 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117535 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117536 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117537 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117538 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117539 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117540 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117541 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117542 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117543 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117544 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117545 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117546 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117547 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117548 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117549 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117550 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117551 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117552 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117553 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117554 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117555 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117556 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117557 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117558 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117559 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117560 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117561 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117562 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117563 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117564 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117565 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117566 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117567 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117568 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117569 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117570 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117571 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117572 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117573 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117574 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117575 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117576 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117577 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117578 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117579 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117580 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117581 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117582 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117583 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117584 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117585 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117586 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117587 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117588 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117589 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117590 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117591 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117592 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117593 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117594 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117595 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117596 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117597 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117598 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117599 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117600 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117601 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117602 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117603 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117604 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117605 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117606 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117607 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117608 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117609 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117610 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117611 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117612 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117613 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117614 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117615 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117616 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117617 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117618 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117619 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117620 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117621 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117622 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117623 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117624 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117625 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117626 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117627 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117628 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117629 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117630 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117631 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117632 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117633 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117634 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117635 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117636 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117637 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117638 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117639 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117640 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117641 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117642 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117643 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117644 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117645 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117646 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117647 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117648 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117649 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117650 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117651 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117652 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117653 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117654 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117655 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117656 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117657 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117658 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117659 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117660 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117661 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117662 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117663 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117664 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117665 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117666 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117667 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117668 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117669 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117670 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117671 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117672 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117673 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117674 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117675 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117676 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117677 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117678 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117679 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117680 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117681 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117682 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117683 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117684 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117685 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117686 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117687 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117688 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117689 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117690 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117691 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117692 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117693 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117694 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117695 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117696 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117697 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117698 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117699 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117700 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117701 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117702 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117703 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117704 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117705 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117706 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117707 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117708 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117709 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117710 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117711 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117712 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117713 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117714 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117715 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117716 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117717 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117718 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117719 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117720 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117721 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117722 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117723 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117724 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117725 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117726 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117727 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117728 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117729 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117730 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117731 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117732 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117733 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117734 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117735 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117736 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117737 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117738 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117739 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117740 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117741 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117742 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117743 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117744 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117745 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117746 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117747 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117748 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117749 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117750 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117751 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117752 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117753 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117754 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117755 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117756 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117757 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117758 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117759 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117760 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117761 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117762 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117763 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117764 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117765 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117766 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117767 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117768 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117769 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117770 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117771 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117772 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117773 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117774 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117775 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117776 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117777 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117778 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117779 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117780 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117781 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117782 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117783 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117784 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117785 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117786 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117787 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117788 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117789 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117790 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117791 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117792 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117793 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117794 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117795 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117796 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117797 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117798 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117799 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117800 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117801 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117802 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117803 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117804 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117805 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117806 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117807 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117808 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117809 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117810 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117811 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117812 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117813 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117814 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117815 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117816 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117817 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117818 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117819 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117820 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117821 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117822 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117823 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117824 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117825 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117826 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117827 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117828 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117829 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117830 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117831 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117832 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117833 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117834 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117835 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117836 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117837 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117838 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117839 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117840 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117841 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117842 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117843 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117844 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117845 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117846 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117847 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117848 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117849 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117850 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117851 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117852 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117853 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117854 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117855 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117856 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117857 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117858 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117859 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117860 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117861 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117862 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117863 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117864 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117865 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117866 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117867 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117868 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117869 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117870 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117871 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117872 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117873 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117874 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117875 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117876 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117877 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117878 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117879 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117880 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117881 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117882 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117883 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117884 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117885 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117886 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117887 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117888 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117889 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117890 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117891 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117892 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117893 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117894 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117895 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117896 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117897 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117898 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117899 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117900 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117901 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117902 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117903 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117904 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117905 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117906 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117907 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117908 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117909 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117910 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117911 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117912 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117913 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117914 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117915 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117916 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117917 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117918 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117919 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117920 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117921 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117922 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117923 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117924 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117925 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117926 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117927 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117928 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117929 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117930 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117931 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117932 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117933 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117934 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117935 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
