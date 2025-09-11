<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0114 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			114000 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114001 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114002 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114003 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114004 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114005 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114006 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114007 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114008 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114009 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114010 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114011 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114012 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114013 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114014 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114015 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114016 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114017 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114018 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114019 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114020 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114021 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114022 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114023 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114024 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114025 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114026 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114027 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114028 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114029 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114030 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114031 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114032 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114033 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114034 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114035 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114036 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114037 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114038 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114039 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114040 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114041 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114042 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114043 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114044 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114045 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114046 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114047 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114048 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114049 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114050 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114051 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114052 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114053 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114054 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114055 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114056 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114057 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114058 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114059 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114060 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114061 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114062 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114063 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114064 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114065 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114066 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114067 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114068 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114069 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114070 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114071 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114072 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114073 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114074 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114075 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114076 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114077 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114078 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114079 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114080 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114081 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114082 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114083 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114084 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114085 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114086 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114087 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114088 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114089 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114090 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114091 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114092 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114093 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114094 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114095 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114096 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114097 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114098 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114099 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114100 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114101 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114102 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114103 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114104 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114105 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114106 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114107 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114108 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114109 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114110 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114111 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114112 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114113 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114114 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114115 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114116 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114117 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114118 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114119 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114120 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114121 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114122 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114123 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114124 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114125 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114126 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114127 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114128 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114129 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114130 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114131 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114132 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114133 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114134 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114135 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114136 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114137 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114138 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114139 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114140 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114141 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114142 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114143 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114144 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114145 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114146 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114147 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114148 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114149 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114150 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114151 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114152 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114153 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114154 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114155 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114156 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114157 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114158 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114159 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114160 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114161 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114162 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114163 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114164 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114165 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114166 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114167 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114168 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114169 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114170 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114171 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114172 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114173 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114174 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114175 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114176 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114177 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114178 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114179 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114180 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114181 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114182 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114183 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114184 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114185 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114186 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114187 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114188 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114189 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114190 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114191 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114192 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114193 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114194 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114195 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114196 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114197 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114198 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114199 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114200 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114201 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114202 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114203 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114204 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114205 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114206 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114207 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114208 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114209 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114210 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114211 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114212 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114213 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114214 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114215 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114216 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114217 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114218 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114219 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114220 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114221 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114222 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114223 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114224 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114225 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114226 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114227 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114228 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114229 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114230 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114231 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114232 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114233 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114234 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114235 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114236 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114237 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114238 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114239 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114240 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114241 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114242 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114243 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114244 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114245 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114246 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114247 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114248 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114249 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114250 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114251 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114252 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114253 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114254 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114255 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114256 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114257 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114258 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114259 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114260 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114261 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114262 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114263 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114264 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114265 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114266 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114267 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114268 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114269 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114270 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114271 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114272 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114273 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114274 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114275 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114276 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114277 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114278 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114279 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114280 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114281 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114282 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114283 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114284 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114285 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114286 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114287 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114288 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114289 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114290 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114291 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114292 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114293 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114294 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114295 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114296 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114297 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114298 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114299 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114300 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114301 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114302 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114303 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114304 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114305 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114306 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114307 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114308 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114309 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114310 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114311 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114312 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114313 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114314 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114315 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114316 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114317 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114318 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114319 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114320 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114321 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114322 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114323 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114324 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114325 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114326 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114327 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114328 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114329 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114330 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114331 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114332 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114333 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114334 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114335 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114336 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114337 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114338 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114339 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114340 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114341 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114342 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114343 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114344 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114345 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114346 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114347 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114348 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114349 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114350 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114351 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114352 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114353 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114354 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114355 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114356 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114357 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114358 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114359 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114360 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114361 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114362 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114363 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114364 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114365 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114366 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114367 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114368 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114369 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114370 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114371 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114372 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114373 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114374 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114375 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114376 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114377 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114378 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114379 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114380 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114381 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114382 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114383 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114384 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114385 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114386 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114387 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114388 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114389 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114390 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114391 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114392 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114393 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114394 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114395 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114396 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114397 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114398 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114399 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114400 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114401 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114402 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114403 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114404 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114405 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114406 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114407 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114408 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114409 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114410 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114411 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114412 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114413 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114414 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114415 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114416 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114417 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114418 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114419 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114420 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114421 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114422 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114423 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114424 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114425 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114426 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114427 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114428 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114429 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114430 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114431 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114432 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114433 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114434 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114435 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114436 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114437 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114438 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114439 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114440 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114441 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114442 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114443 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114444 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114445 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114446 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114447 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114448 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114449 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114450 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114451 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114452 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114453 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114454 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114455 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114456 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114457 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114458 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114459 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114460 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114461 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114462 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114463 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114464 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114465 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114466 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114467 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114468 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114469 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114470 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114471 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114472 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114473 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114474 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114475 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114476 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114477 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114478 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114479 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114480 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114481 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114482 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114483 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114484 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114485 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114486 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114487 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114488 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114489 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114490 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114491 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114492 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114493 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114494 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114495 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114496 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114497 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114498 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114499 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114500 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114501 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114502 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114503 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114504 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114505 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114506 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114507 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114508 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114509 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114510 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114511 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114512 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114513 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114514 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114515 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114516 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114517 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114518 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114519 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114520 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114521 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114522 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114523 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114524 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114525 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114526 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114527 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114528 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114529 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114530 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114531 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114532 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114533 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114534 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114535 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114536 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114537 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114538 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114539 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114540 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114541 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114542 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114543 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114544 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114545 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114546 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114547 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114548 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114549 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114550 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114551 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114552 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114553 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114554 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114555 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114556 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114557 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114558 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114559 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114560 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114561 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114562 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114563 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114564 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114565 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114566 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114567 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114568 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114569 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114570 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114571 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114572 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114573 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114574 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114575 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114576 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114577 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114578 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114579 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114580 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114581 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114582 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114583 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114584 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114585 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114586 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114587 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114588 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114589 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114590 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114591 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114592 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114593 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114594 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114595 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114596 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114597 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114598 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114599 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114600 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114601 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114602 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114603 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114604 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114605 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114606 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114607 => [
				'validator'                => new MappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114608 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114609 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114610 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114611 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114612 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114613 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114614 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114615 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114616 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114617 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114618 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114619 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114620 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114621 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114622 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114623 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114624 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114625 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114626 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114627 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114628 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114629 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114630 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114631 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114632 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114633 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114634 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114635 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114636 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114637 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114638 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114639 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114640 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114641 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114642 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114643 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114644 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114645 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114646 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114647 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114648 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114649 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114650 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114651 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114652 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114653 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114654 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114655 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114656 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114657 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114658 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114659 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114660 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114661 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114662 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114663 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114664 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114665 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114666 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114667 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114668 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114669 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114670 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114671 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114672 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114673 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114674 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114675 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114676 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114677 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114678 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114679 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114680 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114681 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114682 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114683 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114684 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114685 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114686 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114687 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114688 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114689 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114690 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114691 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114692 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114693 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114694 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114695 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114696 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114697 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114698 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114699 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114700 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114701 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114702 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114703 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114704 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114705 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114706 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114707 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114708 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114709 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114710 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114711 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114712 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114713 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114714 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114715 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114716 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114717 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114718 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114719 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114720 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114721 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114722 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114723 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114724 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114725 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114726 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114727 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114728 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114729 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114730 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114731 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114732 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114733 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114734 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114735 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114736 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114737 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114738 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114739 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114740 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114741 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114742 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114743 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114744 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114745 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114746 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114747 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114748 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114749 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114750 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114751 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114752 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114753 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114754 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114755 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114756 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114757 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114758 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114759 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114760 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114761 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114762 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114763 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114764 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114765 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114766 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114767 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114768 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114769 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114770 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114771 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114772 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114773 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114774 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114775 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114776 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114777 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114778 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114779 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114780 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114781 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114782 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114783 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114784 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114785 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114786 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114787 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114788 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114789 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114790 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114791 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114792 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114793 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114794 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114795 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114796 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114797 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114798 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114799 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114800 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114801 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114802 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114803 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114804 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114805 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114806 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114807 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114808 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114809 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114810 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114811 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114812 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114813 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114814 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114815 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114816 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114817 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114818 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114819 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114820 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114821 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114822 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114823 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114824 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114825 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114826 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114827 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114828 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114829 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114830 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114831 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114832 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114833 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114834 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114835 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114836 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114837 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114838 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114839 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114840 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114841 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114842 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114843 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114844 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114845 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114846 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114847 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114848 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114849 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114850 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114851 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114852 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114853 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114854 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114855 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114856 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114857 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114858 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114859 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114860 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114861 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114862 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114863 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114864 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114865 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114866 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114867 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114868 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114869 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114870 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114871 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114872 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114873 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114874 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114875 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114876 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114877 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114878 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114879 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114880 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114881 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114882 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114883 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114884 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114885 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114886 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114887 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114888 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114889 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114890 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114891 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114892 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114893 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114894 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114895 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114896 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114897 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114898 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114899 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114900 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114901 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114902 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114903 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114904 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114905 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114906 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114907 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114908 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114909 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114910 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114911 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114912 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114913 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114914 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114915 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114916 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114917 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114918 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114919 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114920 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114921 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114922 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114923 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114924 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114925 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114926 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114927 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114928 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114929 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114930 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114931 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114932 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114933 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114934 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114935 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114936 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114937 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114938 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114939 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114940 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114941 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114942 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114943 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114944 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114945 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114946 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114947 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114948 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114949 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114950 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114951 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114952 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114953 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114954 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114955 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114956 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114957 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114958 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114959 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114960 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114961 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114962 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114963 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114964 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114965 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114966 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114967 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114968 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114969 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114970 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114971 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114972 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114973 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114974 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114975 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114976 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114977 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114978 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114979 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114980 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114981 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114982 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114983 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114984 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114985 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114986 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114987 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114988 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114989 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114990 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114991 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114992 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114993 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114994 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114995 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114996 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114997 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114998 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114999 => [
				'validator'                => new MappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
