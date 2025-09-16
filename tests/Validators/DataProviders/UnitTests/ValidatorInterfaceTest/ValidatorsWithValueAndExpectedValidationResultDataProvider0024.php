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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0024 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			24000 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24001 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24002 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24003 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24004 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24005 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24006 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24007 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24008 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24009 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24010 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24011 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24012 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24013 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24014 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24015 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24016 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24017 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24018 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24019 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24020 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24021 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24022 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24023 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24024 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24025 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24026 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24027 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24028 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24029 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24030 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24031 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24032 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24033 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24034 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24035 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24036 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24037 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24038 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24039 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24040 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24041 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24042 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24043 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24044 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24045 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24046 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24047 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24048 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24049 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24050 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24051 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			24052 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24053 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24054 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24055 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24056 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24057 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24058 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24059 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24060 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24061 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24062 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24063 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24064 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24065 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24066 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24067 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24068 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24069 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24070 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24071 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24072 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24073 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24074 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24075 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24076 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24077 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24078 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24079 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24080 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24081 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24082 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24083 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24084 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24085 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24086 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24087 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24088 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24089 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24090 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24091 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24092 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24093 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24094 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24095 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24096 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24097 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24098 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24099 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24100 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24101 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24102 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24103 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24104 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24105 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24106 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24107 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24108 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24109 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24110 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24111 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24112 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24113 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24114 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24115 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24116 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24117 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24118 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24119 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24120 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24121 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24122 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24123 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24124 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24125 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24126 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24127 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24128 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24129 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24130 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24131 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24132 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24133 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24134 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24135 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24136 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24137 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24138 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24139 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24140 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24141 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24142 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24143 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24144 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24145 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24146 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24147 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24148 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24149 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24150 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24151 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24152 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24153 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24154 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24155 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24156 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24157 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24158 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24159 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24160 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24161 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24162 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24163 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24164 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24165 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24166 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24167 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24168 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24169 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24170 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24171 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24172 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24173 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24174 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24175 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24176 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24177 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24178 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24179 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24180 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24181 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24182 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24183 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24184 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24185 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24186 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24187 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24188 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24189 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24190 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24191 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24192 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24193 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24194 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24195 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24196 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24197 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24198 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24199 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24200 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24201 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24202 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24203 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24204 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24205 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24206 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24207 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24208 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24209 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24210 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24211 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24212 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24213 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24214 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24215 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24216 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24217 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24218 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24219 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24220 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24221 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24222 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24223 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24224 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24225 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24226 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24227 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24228 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24229 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24230 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24231 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24232 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24233 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24234 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24235 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24236 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24237 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24238 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24239 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24240 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24241 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24242 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24243 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24244 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24245 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24246 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24247 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24248 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24249 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24250 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24251 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24252 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24253 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24254 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24255 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24256 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24257 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24258 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24259 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24260 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			24261 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24262 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24263 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24264 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24265 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24266 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24267 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24268 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24269 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24270 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24271 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24272 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24273 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24274 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24275 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24276 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24277 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24278 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24279 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24280 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24281 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24282 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24283 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24284 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24285 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24286 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24287 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24288 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24289 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24290 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24291 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24292 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24293 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24294 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24295 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24296 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24297 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24298 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24299 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24300 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24301 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24302 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24303 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24304 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24305 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24306 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24307 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24308 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24309 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24310 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24311 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24312 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24313 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24314 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24315 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24316 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24317 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24318 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24319 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24320 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24321 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24322 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24323 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24324 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24325 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24326 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24327 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24328 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24329 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24330 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24331 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24332 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24333 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24334 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24335 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24336 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24337 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24338 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24339 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24340 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24341 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24342 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24343 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24344 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24345 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24346 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24347 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24348 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24349 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24350 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24351 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24352 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24353 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24354 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24355 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24356 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24357 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24358 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24359 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24360 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24361 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24362 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24363 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24364 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24365 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24366 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24367 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24368 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24369 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24370 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24371 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24372 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24373 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24374 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24375 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24376 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24377 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24378 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24379 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24380 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24381 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24382 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24383 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24384 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24385 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24386 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24387 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24388 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24389 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24390 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24391 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24392 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24393 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24394 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24395 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24396 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24397 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24398 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24399 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24400 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24401 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24402 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24403 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24404 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24405 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24406 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24407 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24408 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24409 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24410 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24411 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24412 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24413 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24414 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24415 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24416 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24417 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24418 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24419 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24420 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24421 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24422 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24423 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24424 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24425 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24426 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24427 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24428 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24429 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24430 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24431 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24432 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24433 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24434 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24435 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24436 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24437 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24438 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24439 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24440 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24441 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24442 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24443 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24444 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24445 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24446 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24447 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24448 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24449 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24450 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24451 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24452 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24453 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24454 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24455 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24456 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24457 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24458 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24459 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24460 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24461 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24462 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24463 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24464 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24465 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24466 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24467 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			24468 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			24469 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24470 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24471 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24472 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24473 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24474 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24475 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24476 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24477 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24478 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24479 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24480 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24481 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24482 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24483 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24484 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24485 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24486 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24487 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24488 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24489 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24490 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24491 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24492 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24493 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24494 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24495 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24496 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24497 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24498 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24499 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24500 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24501 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24502 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24503 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24504 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24505 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24506 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24507 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24508 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24509 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24510 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24511 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24512 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24513 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24514 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24515 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24516 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24517 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24518 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24519 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24520 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24521 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24522 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24523 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24524 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24525 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24526 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24527 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24528 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24529 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24530 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24531 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24532 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24533 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24534 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24535 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24536 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24537 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24538 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24539 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24540 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24541 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24542 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24543 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24544 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24545 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24546 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24547 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24548 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24549 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24550 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24551 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24552 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24553 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24554 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24555 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24556 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24557 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24558 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24559 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24560 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24561 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24562 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24563 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24564 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24565 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24566 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24567 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24568 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24569 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24570 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24571 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24572 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24573 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24574 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24575 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24576 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24577 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24578 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24579 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24580 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24581 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24582 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24583 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24584 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24585 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24586 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24587 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24588 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24589 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24590 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24591 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24592 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24593 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24594 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24595 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24596 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24597 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24598 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24599 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24600 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24601 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24602 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24603 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24604 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24605 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24606 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24607 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24608 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24609 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24610 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24611 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24612 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24613 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24614 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24615 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24616 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24617 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24618 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24619 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24620 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24621 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24622 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24623 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24624 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24625 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24626 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24627 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24628 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24629 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24630 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24631 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24632 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24633 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24634 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24635 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24636 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24637 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24638 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24639 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24640 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24641 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24642 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24643 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24644 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24645 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24646 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24647 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24648 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24649 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24650 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24651 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24652 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24653 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24654 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24655 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24656 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24657 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24658 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24659 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24660 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24661 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24662 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24663 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24664 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24665 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24666 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24667 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24668 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24669 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24670 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24671 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24672 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24673 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24674 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24675 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			24676 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			24677 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24678 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24679 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24680 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24681 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24682 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24683 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24684 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24685 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24686 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24687 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24688 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24689 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24690 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24691 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24692 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24693 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24694 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24695 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24696 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24697 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24698 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24699 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24700 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24701 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24702 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24703 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24704 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24705 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24706 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24707 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24708 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24709 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24710 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24711 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24712 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24713 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24714 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24715 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24716 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24717 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24718 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24719 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24720 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24721 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24722 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24723 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24724 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24725 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24726 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24727 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24728 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24729 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24730 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24731 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24732 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24733 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24734 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24735 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24736 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24737 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24738 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24739 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24740 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24741 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24742 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24743 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24744 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24745 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24746 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24747 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24748 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24749 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24750 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24751 => [
				'validator'                => new IsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24752 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24753 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24754 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24755 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24756 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24757 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24758 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24759 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24760 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24761 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24762 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24763 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24764 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24765 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24766 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24767 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24768 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24769 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24770 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24771 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24772 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24773 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24774 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24775 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24776 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24777 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24778 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24779 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24780 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24781 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24782 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24783 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24784 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24785 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24786 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24787 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24788 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24789 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24790 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24791 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24792 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24793 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24794 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24795 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24796 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24797 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24798 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24799 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24800 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24801 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24802 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24803 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24804 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24805 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24806 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24807 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24808 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24809 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24810 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24811 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24812 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24813 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24814 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24815 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24816 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24817 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24818 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24819 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24820 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24821 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24822 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24823 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24824 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24825 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24826 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24827 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24828 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24829 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24830 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24831 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24832 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24833 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24834 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24835 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24836 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24837 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24838 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24839 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24840 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24841 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24842 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24843 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24844 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24845 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24846 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24847 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24848 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24849 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24850 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24851 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24852 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24853 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24854 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24855 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24856 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24857 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24858 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24859 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24860 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24861 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24862 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24863 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24864 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24865 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24866 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24867 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24868 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24869 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24870 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24871 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24872 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24873 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24874 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24875 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24876 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24877 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24878 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24879 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24880 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24881 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24882 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24883 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24884 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24885 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24886 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24887 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24888 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24889 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24890 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24891 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			24892 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24893 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24894 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24895 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24896 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24897 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24898 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24899 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24900 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24901 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24902 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24903 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24904 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24905 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24906 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24907 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24908 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24909 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24910 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24911 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24912 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24913 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24914 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24915 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24916 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24917 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24918 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24919 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24920 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24921 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24922 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24923 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24924 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24925 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24926 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24927 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24928 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24929 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24930 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24931 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24932 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24933 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24934 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24935 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24936 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24937 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24938 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24939 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24940 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24941 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24942 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24943 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24944 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24945 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24946 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24947 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24948 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24949 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24950 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24951 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24952 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24953 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24954 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24955 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24956 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24957 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24958 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24959 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24960 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24961 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24962 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24963 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24964 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24965 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24966 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24967 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24968 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24969 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24970 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24971 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24972 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24973 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24974 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24975 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24976 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24977 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24978 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24979 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24980 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24981 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24982 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24983 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24984 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24985 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24986 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24987 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24988 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24989 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24990 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24991 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24992 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24993 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24994 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24995 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24996 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24997 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24998 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			24999 => [
				'validator'                => new IsInArrayValidator( Values::TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
