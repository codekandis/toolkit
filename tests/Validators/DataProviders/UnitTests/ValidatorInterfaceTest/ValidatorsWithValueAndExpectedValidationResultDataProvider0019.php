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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0019 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			19000 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19001 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19002 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19003 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19004 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19005 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19006 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19007 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			19008 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			19009 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19010 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19011 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19012 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19013 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19014 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19015 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19016 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19017 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19018 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19019 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19020 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19021 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19022 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19023 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19024 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19025 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19026 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19027 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19028 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19029 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19030 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19031 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19032 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19033 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19034 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19035 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19036 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19037 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19038 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19039 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19040 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19041 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19042 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19043 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19044 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19045 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19046 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19047 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19048 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19049 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19050 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19051 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19052 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19053 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19054 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19055 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19056 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19057 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19058 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19059 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19060 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19061 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19062 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19063 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19064 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19065 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19066 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19067 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19068 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19069 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19070 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19071 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19072 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19073 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19074 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19075 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19076 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19077 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19078 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19079 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19080 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19081 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19082 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19083 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19084 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19085 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19086 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19087 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19088 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19089 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19090 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19091 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19092 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19093 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19094 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19095 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19096 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19097 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19098 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19099 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19100 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19101 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19102 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19103 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19104 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19105 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19106 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19107 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19108 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19109 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19110 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19111 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19112 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19113 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19114 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19115 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19116 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19117 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19118 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19119 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19120 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19121 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19122 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19123 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19124 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19125 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19126 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19127 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19128 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19129 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19130 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19131 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19132 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19133 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19134 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19135 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19136 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19137 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19138 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19139 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19140 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19141 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19142 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19143 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19144 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19145 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19146 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19147 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19148 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19149 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19150 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19151 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19152 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19153 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19154 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19155 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19156 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19157 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19158 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19159 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19160 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19161 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19162 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19163 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19164 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19165 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19166 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19167 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19168 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19169 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19170 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19171 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19172 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19173 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19174 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19175 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19176 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19177 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19178 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19179 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19180 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19181 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19182 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19183 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19184 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19185 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19186 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19187 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19188 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19189 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19190 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19191 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19192 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19193 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19194 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19195 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19196 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19197 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19198 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19199 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19200 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19201 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19202 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19203 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19204 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19205 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19206 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19207 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19208 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19209 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19210 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19211 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19212 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19213 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19214 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19215 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			19216 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			19217 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19218 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19219 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19220 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19221 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19222 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19223 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19224 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19225 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19226 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19227 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19228 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19229 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19230 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19231 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19232 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19233 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19234 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19235 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19236 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19237 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19238 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19239 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19240 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19241 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19242 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19243 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19244 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19245 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19246 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19247 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19248 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19249 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19250 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19251 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19252 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19253 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19254 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19255 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19256 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19257 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19258 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19259 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19260 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19261 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19262 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19263 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19264 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19265 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19266 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19267 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19268 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19269 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19270 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19271 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19272 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19273 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19274 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19275 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19276 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19277 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19278 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19279 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19280 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19281 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19282 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19283 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19284 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19285 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19286 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19287 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19288 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19289 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19290 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19291 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19292 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19293 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19294 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19295 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19296 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19297 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19298 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19299 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19300 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19301 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19302 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19303 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19304 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19305 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19306 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19307 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19308 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19309 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19310 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19311 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19312 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19313 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19314 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19315 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19316 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19317 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19318 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19319 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19320 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19321 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19322 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19323 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19324 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19325 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19326 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19327 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19328 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19329 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19330 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19331 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19332 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19333 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19334 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19335 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19336 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19337 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19338 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19339 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19340 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19341 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19342 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19343 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19344 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19345 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19346 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19347 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19348 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19349 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19350 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19351 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19352 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19353 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19354 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19355 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19356 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19357 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19358 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19359 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19360 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19361 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19362 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19363 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19364 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19365 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19366 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19367 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19368 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19369 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19370 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19371 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19372 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19373 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19374 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19375 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19376 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19377 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19378 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19379 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19380 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19381 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19382 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19383 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19384 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19385 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19386 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19387 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19388 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19389 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19390 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19391 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19392 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19393 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19394 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19395 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19396 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19397 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19398 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19399 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19400 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19401 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19402 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19403 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19404 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19405 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19406 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19407 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19408 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19409 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19410 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19411 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19412 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19413 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19414 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19415 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19416 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19417 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19418 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19419 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19420 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19421 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19422 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19423 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19424 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19425 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19426 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19427 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19428 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19429 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			19430 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19431 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19432 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19433 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19434 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19435 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19436 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19437 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19438 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19439 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19440 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19441 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19442 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19443 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19444 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19445 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19446 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19447 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19448 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19449 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19450 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19451 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19452 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19453 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19454 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19455 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19456 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19457 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19458 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19459 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19460 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19461 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19462 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19463 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19464 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19465 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19466 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19467 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19468 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19469 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19470 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19471 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19472 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19473 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19474 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19475 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19476 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19477 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19478 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19479 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19480 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19481 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19482 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19483 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19484 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19485 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19486 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19487 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19488 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19489 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19490 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19491 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19492 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19493 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19494 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19495 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19496 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19497 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19498 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19499 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19500 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19501 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19502 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19503 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19504 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19505 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19506 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19507 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19508 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19509 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19510 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19511 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19512 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19513 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19514 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19515 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19516 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19517 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19518 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19519 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19520 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19521 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19522 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19523 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19524 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19525 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19526 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19527 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19528 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19529 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19530 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19531 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19532 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19533 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19534 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19535 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19536 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19537 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19538 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19539 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19540 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19541 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19542 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19543 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19544 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19545 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19546 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19547 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19548 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19549 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19550 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19551 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19552 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19553 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19554 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19555 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19556 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19557 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19558 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19559 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19560 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19561 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19562 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19563 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19564 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19565 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19566 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19567 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19568 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19569 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19570 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19571 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19572 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19573 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19574 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19575 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19576 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19577 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19578 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19579 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19580 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19581 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19582 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19583 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19584 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19585 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19586 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19587 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19588 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19589 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19590 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19591 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19592 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19593 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19594 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19595 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19596 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19597 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19598 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19599 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19600 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19601 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19602 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19603 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19604 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19605 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19606 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19607 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19608 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19609 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19610 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19611 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19612 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19613 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19614 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19615 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19616 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19617 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19618 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19619 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19620 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19621 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19622 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19623 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19624 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19625 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19626 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19627 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19628 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19629 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19630 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19631 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19632 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19633 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19634 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19635 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19636 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19637 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19638 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			19639 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19640 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19641 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19642 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19643 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19644 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19645 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19646 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19647 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19648 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19649 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19650 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19651 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19652 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19653 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19654 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19655 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19656 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19657 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19658 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19659 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19660 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19661 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19662 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19663 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19664 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19665 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19666 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19667 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19668 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19669 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19670 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19671 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19672 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19673 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19674 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19675 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19676 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19677 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19678 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19679 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19680 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19681 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19682 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19683 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19684 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19685 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19686 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19687 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19688 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19689 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19690 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19691 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19692 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19693 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19694 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19695 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19696 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19697 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19698 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19699 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19700 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19701 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19702 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19703 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19704 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19705 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19706 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19707 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19708 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19709 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19710 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19711 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19712 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19713 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19714 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19715 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19716 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19717 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19718 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19719 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19720 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19721 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19722 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19723 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19724 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19725 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19726 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19727 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19728 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19729 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19730 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19731 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19732 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19733 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19734 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19735 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19736 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19737 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19738 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19739 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19740 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19741 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19742 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19743 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19744 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19745 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19746 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19747 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19748 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19749 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19750 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19751 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19752 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19753 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19754 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19755 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19756 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19757 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19758 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19759 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19760 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19761 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19762 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19763 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19764 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19765 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19766 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19767 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19768 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19769 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19770 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19771 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19772 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19773 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19774 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19775 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19776 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19777 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19778 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19779 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19780 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19781 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19782 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19783 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19784 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19785 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19786 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19787 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19788 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19789 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19790 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19791 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19792 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19793 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19794 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19795 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19796 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19797 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19798 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19799 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19800 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19801 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19802 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19803 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19804 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19805 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19806 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19807 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19808 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19809 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19810 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19811 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19812 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19813 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19814 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19815 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19816 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19817 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19818 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19819 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19820 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19821 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19822 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19823 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19824 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19825 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19826 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19827 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19828 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19829 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19830 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19831 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19832 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19833 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19834 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19835 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19836 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19837 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19838 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19839 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19840 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19841 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19842 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19843 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19844 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19845 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			19846 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			19847 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19848 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19849 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19850 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19851 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19852 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19853 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19854 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19855 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19856 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19857 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19858 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19859 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19860 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19861 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19862 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19863 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19864 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19865 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19866 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19867 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19868 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19869 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19870 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19871 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19872 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19873 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19874 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19875 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19876 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19877 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19878 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19879 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19880 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19881 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19882 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19883 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19884 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19885 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19886 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19887 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19888 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19889 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19890 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19891 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19892 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19893 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19894 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19895 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19896 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19897 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19898 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19899 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19900 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19901 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19902 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19903 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19904 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19905 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19906 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19907 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19908 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19909 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19910 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19911 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19912 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19913 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19914 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19915 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19916 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19917 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19918 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19919 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19920 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19921 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19922 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19923 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19924 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19925 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19926 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19927 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19928 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19929 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19930 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19931 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19932 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19933 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19934 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19935 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19936 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19937 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19938 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19939 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19940 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19941 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19942 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19943 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19944 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19945 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19946 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19947 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19948 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19949 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19950 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19951 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19952 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19953 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19954 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19955 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19956 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19957 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19958 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19959 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19960 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19961 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19962 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19963 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19964 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19965 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19966 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19967 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19968 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19969 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19970 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19971 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19972 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19973 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19974 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19975 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19976 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19977 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19978 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19979 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19980 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19981 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19982 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19983 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19984 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19985 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19986 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19987 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19988 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19989 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19990 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19991 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19992 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19993 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19994 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19995 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19996 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19997 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19998 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			19999 => [
				'validator'                => new IsInArrayValidator( Values::ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
