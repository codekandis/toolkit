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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0021 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			21000 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21001 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21002 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21003 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21004 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21005 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21006 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21007 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21008 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21009 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21010 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21011 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21012 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21013 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21014 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21015 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21016 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21017 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21018 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21019 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21020 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21021 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21022 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21023 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21024 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21025 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21026 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21027 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21028 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21029 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21030 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21031 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21032 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21033 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21034 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21035 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21036 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21037 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21038 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21039 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21040 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21041 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21042 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21043 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21044 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21045 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21046 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21047 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21048 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21049 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21050 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21051 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21052 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21053 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21054 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21055 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21056 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21057 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21058 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21059 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21060 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21061 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21062 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21063 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21064 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21065 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21066 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21067 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21068 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21069 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21070 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21071 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21072 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21073 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21074 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21075 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21076 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21077 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21078 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21079 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21080 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21081 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21082 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21083 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21084 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21085 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21086 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21087 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21088 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21089 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21090 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21091 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21092 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21093 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21094 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21095 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21096 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21097 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21098 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21099 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21100 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21101 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21102 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21103 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21104 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21105 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			21106 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21107 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21108 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21109 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21110 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21111 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21112 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21113 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21114 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21115 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21116 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21117 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21118 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21119 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21120 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21121 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21122 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21123 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21124 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21125 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21126 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21127 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21128 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21129 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21130 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21131 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21132 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21133 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21134 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21135 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21136 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21137 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21138 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21139 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21140 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21141 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21142 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21143 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21144 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21145 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21146 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21147 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21148 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21149 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21150 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21151 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21152 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21153 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21154 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21155 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21156 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21157 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21158 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21159 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21160 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21161 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21162 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21163 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21164 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21165 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21166 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21167 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21168 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21169 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21170 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21171 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21172 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21173 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21174 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21175 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21176 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21177 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21178 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21179 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21180 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21181 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21182 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21183 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21184 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21185 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21186 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21187 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21188 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21189 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21190 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21191 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21192 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21193 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21194 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21195 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21196 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21197 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21198 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21199 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21200 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21201 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21202 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21203 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21204 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21205 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21206 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21207 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21208 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21209 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21210 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21211 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21212 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21213 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21214 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21215 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21216 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21217 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21218 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21219 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21220 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21221 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21222 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21223 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21224 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21225 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21226 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21227 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21228 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21229 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21230 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21231 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21232 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21233 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21234 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21235 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21236 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21237 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21238 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21239 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21240 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21241 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21242 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21243 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21244 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21245 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21246 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21247 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21248 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21249 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21250 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21251 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21252 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21253 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21254 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21255 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21256 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21257 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21258 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21259 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21260 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21261 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21262 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21263 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21264 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21265 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21266 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21267 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21268 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21269 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21270 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21271 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21272 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21273 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21274 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21275 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21276 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21277 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21278 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21279 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21280 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21281 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21282 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21283 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21284 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21285 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21286 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21287 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21288 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21289 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21290 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21291 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21292 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21293 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21294 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21295 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21296 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21297 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21298 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21299 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21300 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21301 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21302 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21303 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21304 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21305 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21306 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21307 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21308 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21309 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21310 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21311 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21312 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21313 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21314 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			21315 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21316 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21317 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21318 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21319 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21320 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21321 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21322 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21323 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21324 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21325 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21326 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21327 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21328 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21329 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21330 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21331 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21332 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21333 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21334 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21335 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21336 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21337 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21338 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21339 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21340 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21341 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21342 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21343 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21344 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21345 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21346 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21347 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21348 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21349 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21350 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21351 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21352 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21353 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21354 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21355 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21356 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21357 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21358 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21359 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21360 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21361 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21362 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21363 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21364 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21365 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21366 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21367 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21368 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21369 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21370 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21371 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21372 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21373 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21374 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21375 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21376 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21377 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21378 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21379 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21380 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21381 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21382 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21383 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21384 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21385 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21386 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21387 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21388 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21389 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21390 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21391 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21392 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21393 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21394 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21395 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21396 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21397 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21398 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21399 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21400 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21401 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21402 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21403 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21404 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21405 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21406 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21407 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21408 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21409 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21410 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21411 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21412 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21413 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21414 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21415 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21416 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21417 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21418 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21419 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21420 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21421 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21422 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21423 => [
				'validator'                => new IsInArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21424 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21425 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21426 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21427 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21428 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21429 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21430 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21431 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21432 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21433 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21434 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21435 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21436 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21437 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21438 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21439 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21440 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21441 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21442 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21443 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21444 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21445 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21446 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21447 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21448 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21449 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21450 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21451 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21452 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21453 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21454 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21455 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21456 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21457 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21458 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21459 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21460 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21461 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21462 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21463 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21464 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21465 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21466 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21467 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21468 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21469 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21470 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21471 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21472 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21473 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21474 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21475 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21476 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21477 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21478 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21479 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21480 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21481 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21482 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21483 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21484 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21485 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21486 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21487 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21488 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21489 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21490 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21491 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21492 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21493 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21494 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21495 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21496 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21497 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21498 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21499 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21500 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21501 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21502 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21503 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21504 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21505 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21506 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21507 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21508 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21509 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21510 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21511 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21512 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21513 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21514 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21515 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21516 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21517 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21518 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21519 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21520 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21521 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21522 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21523 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21524 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21525 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21526 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21527 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			21528 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21529 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21530 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21531 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21532 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21533 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21534 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21535 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21536 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21537 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21538 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21539 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21540 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21541 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21542 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21543 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21544 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21545 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21546 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21547 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21548 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21549 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21550 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21551 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21552 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21553 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21554 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21555 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21556 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21557 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21558 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21559 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21560 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21561 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21562 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21563 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21564 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21565 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21566 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21567 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21568 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21569 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21570 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21571 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21572 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21573 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21574 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21575 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21576 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21577 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21578 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21579 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21580 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21581 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21582 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21583 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21584 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21585 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21586 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21587 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21588 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21589 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21590 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21591 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21592 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21593 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21594 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21595 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21596 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21597 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21598 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21599 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21600 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21601 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21602 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21603 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21604 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21605 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21606 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21607 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21608 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21609 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21610 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21611 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21612 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21613 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21614 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21615 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21616 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21617 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21618 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21619 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21620 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21621 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21622 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21623 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21624 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21625 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21626 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21627 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21628 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21629 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21630 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21631 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21632 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21633 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21634 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21635 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21636 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21637 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21638 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21639 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21640 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21641 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21642 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21643 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21644 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21645 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21646 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21647 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21648 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21649 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21650 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21651 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21652 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21653 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21654 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21655 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21656 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21657 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21658 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21659 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21660 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21661 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21662 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21663 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21664 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21665 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21666 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21667 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21668 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21669 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21670 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21671 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21672 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21673 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21674 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21675 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21676 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21677 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21678 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21679 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21680 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21681 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21682 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21683 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21684 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21685 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21686 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21687 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21688 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21689 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21690 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21691 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21692 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21693 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21694 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21695 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21696 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21697 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21698 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21699 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21700 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21701 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21702 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21703 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21704 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21705 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21706 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21707 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21708 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21709 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21710 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21711 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21712 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21713 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21714 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21715 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21716 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21717 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21718 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21719 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21720 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21721 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21722 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21723 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21724 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21725 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21726 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21727 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21728 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21729 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21730 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21731 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21732 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21733 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21734 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21735 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21736 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			21737 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21738 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21739 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21740 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21741 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21742 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21743 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21744 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21745 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21746 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21747 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21748 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21749 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21750 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21751 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21752 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21753 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21754 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21755 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21756 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21757 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21758 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21759 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21760 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21761 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21762 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21763 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21764 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21765 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21766 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21767 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21768 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21769 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21770 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21771 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21772 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21773 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21774 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21775 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21776 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21777 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21778 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21779 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21780 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21781 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21782 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21783 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21784 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21785 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21786 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21787 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21788 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21789 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21790 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21791 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21792 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21793 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21794 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21795 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21796 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21797 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21798 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21799 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21800 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21801 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21802 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21803 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21804 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21805 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21806 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21807 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21808 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21809 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21810 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21811 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21812 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21813 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21814 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21815 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21816 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21817 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21818 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21819 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21820 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21821 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21822 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21823 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21824 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21825 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21826 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21827 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21828 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21829 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21830 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21831 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21832 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21833 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21834 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21835 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21836 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21837 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21838 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21839 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21840 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21841 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21842 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21843 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21844 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21845 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21846 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21847 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21848 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21849 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21850 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21851 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21852 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21853 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21854 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21855 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21856 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21857 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21858 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21859 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21860 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21861 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21862 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21863 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21864 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21865 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21866 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21867 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21868 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21869 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21870 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21871 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21872 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21873 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21874 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21875 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21876 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21877 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21878 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21879 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21880 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21881 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21882 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21883 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21884 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21885 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21886 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21887 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21888 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21889 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21890 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21891 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21892 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21893 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21894 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21895 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21896 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21897 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21898 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21899 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21900 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21901 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21902 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21903 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21904 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21905 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21906 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21907 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21908 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21909 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21910 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21911 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21912 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21913 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21914 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21915 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21916 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21917 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21918 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21919 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21920 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21921 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21922 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21923 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21924 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21925 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21926 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21927 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21928 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21929 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21930 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21931 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21932 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21933 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21934 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21935 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21936 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21937 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21938 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21939 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21940 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21941 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21942 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21943 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			21944 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			21945 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21946 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21947 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21948 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21949 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21950 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21951 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21952 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21953 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21954 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21955 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21956 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21957 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21958 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21959 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21960 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21961 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21962 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21963 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21964 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21965 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21966 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21967 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21968 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21969 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21970 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21971 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21972 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21973 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21974 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21975 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21976 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21977 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21978 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21979 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21980 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21981 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21982 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21983 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21984 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21985 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21986 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21987 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21988 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21989 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21990 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21991 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21992 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21993 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21994 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21995 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21996 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21997 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21998 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			21999 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
