<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceOrClassConstantsValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0095 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			95000 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95001 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95002 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95003 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95004 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95005 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95006 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95007 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95008 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95009 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95010 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95011 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95012 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95013 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95014 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95015 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95016 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95017 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95018 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95019 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95020 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95021 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95022 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95023 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95024 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95025 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95026 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95027 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95028 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95029 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95030 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95031 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95032 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95033 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95034 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95035 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95036 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95037 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95038 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95039 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95040 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95041 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95042 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95043 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95044 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95045 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95046 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95047 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95048 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95049 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95050 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95051 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95052 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95053 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95054 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95055 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95056 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95057 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95058 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95059 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95060 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95061 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95062 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95063 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95064 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95065 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95066 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95067 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95068 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95069 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95070 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95071 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95072 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95073 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95074 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95075 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95076 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95077 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95078 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95079 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95080 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95081 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95082 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95083 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95084 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95085 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95086 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95087 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95088 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95089 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95090 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95091 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95092 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95093 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95094 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95095 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95096 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95097 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95098 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95099 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95100 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95101 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95102 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95103 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95104 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95105 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95106 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95107 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95108 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95109 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95110 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95111 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95112 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95113 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95114 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95115 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95116 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95117 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95118 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95119 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95120 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95121 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95122 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95123 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95124 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95125 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95126 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95127 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95128 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95129 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95130 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95131 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95132 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95133 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95134 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95135 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95136 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95137 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95138 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95139 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95140 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95141 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95142 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95143 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95144 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95145 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95146 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95147 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95148 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95149 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95150 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95151 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95152 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95153 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95154 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95155 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95156 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95157 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95158 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95159 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95160 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95161 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95162 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95163 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95164 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95165 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95166 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95167 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95168 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95169 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95170 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95171 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95172 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95173 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95174 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95175 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95176 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95177 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95178 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95179 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95180 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95181 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95182 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95183 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95184 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95185 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95186 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95187 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95188 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95189 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95190 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95191 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95192 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95193 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95194 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95195 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95196 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95197 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95198 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95199 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95200 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95201 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95202 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95203 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95204 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95205 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95206 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95207 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95208 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95209 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95210 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95211 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95212 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95213 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95214 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95215 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95216 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95217 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95218 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95219 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95220 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95221 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95222 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95223 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95224 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95225 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95226 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95227 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95228 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95229 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95230 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95231 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95232 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95233 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95234 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95235 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95236 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95237 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95238 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95239 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95240 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95241 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95242 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95243 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95244 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95245 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95246 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95247 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95248 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95249 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95250 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95251 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95252 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95253 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95254 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95255 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95256 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95257 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95258 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95259 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95260 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95261 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95262 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95263 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95264 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95265 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95266 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95267 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95268 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95269 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95270 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95271 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95272 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95273 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95274 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95275 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95276 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95277 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95278 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95279 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95280 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95281 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95282 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95283 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95284 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95285 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95286 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95287 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95288 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95289 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95290 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95291 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95292 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95293 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95294 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95295 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95296 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95297 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95298 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95299 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95300 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95301 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95302 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95303 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95304 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95305 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95306 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95307 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95308 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95309 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95310 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95311 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95312 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95313 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95314 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95315 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95316 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95317 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95318 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95319 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95320 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95321 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95322 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95323 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95324 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95325 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95326 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95327 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95328 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95329 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95330 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95331 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95332 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95333 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95334 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95335 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95336 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95337 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95338 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95339 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95340 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95341 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95342 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95343 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95344 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95345 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95346 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95347 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95348 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95349 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95350 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95351 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95352 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95353 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95354 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95355 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95356 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95357 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95358 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95359 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95360 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95361 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95362 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95363 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95364 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95365 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95366 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95367 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95368 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95369 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95370 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95371 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95372 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95373 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95374 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95375 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95376 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95377 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95378 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95379 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95380 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95381 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95382 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95383 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95384 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95385 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95386 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95387 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95388 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95389 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95390 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95391 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95392 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95393 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95394 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95395 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95396 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95397 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95398 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95399 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95400 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95401 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95402 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95403 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95404 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95405 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95406 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95407 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95408 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95409 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95410 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95411 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95412 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95413 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95414 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95415 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95416 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95417 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95418 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95419 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95420 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95421 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95422 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95423 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95424 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95425 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95426 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95427 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95428 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95429 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95430 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95431 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95432 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95433 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95434 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95435 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95436 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95437 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95438 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95439 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95440 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95441 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95442 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95443 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95444 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95445 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95446 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95447 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95448 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95449 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95450 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95451 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95452 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95453 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95454 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95455 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95456 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95457 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95458 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95459 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95460 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95461 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95462 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95463 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95464 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95465 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95466 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95467 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95468 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95469 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95470 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95471 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95472 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95473 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95474 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95475 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95476 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95477 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95478 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95479 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95480 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95481 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95482 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95483 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95484 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95485 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95486 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95487 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95488 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95489 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95490 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95491 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95492 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95493 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95494 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95495 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95496 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95497 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95498 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95499 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95500 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95501 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95502 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95503 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95504 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95505 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95506 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95507 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95508 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95509 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95510 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95511 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95512 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95513 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95514 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95515 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95516 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95517 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95518 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95519 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95520 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95521 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95522 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95523 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95524 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95525 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95526 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95527 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95528 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95529 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95530 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95531 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95532 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95533 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95534 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95535 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95536 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95537 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95538 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95539 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95540 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95541 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95542 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95543 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95544 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95545 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95546 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95547 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95548 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95549 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95550 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95551 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95552 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95553 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95554 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95555 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95556 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95557 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95558 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95559 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95560 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95561 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95562 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95563 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95564 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95565 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95566 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95567 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95568 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95569 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95570 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95571 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95572 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95573 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95574 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95575 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95576 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95577 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95578 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95579 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95580 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95581 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95582 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95583 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95584 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95585 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95586 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95587 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95588 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95589 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95590 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95591 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95592 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95593 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95594 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95595 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95596 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95597 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95598 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95599 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95600 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95601 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95602 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95603 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95604 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95605 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95606 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95607 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95608 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95609 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95610 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95611 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95612 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95613 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95614 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95615 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95616 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95617 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95618 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95619 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95620 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95621 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95622 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95623 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95624 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95625 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95626 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95627 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95628 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95629 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95630 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95631 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95632 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95633 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95634 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95635 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95636 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95637 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95638 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95639 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95640 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95641 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95642 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95643 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95644 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95645 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95646 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95647 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95648 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95649 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95650 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95651 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95652 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95653 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95654 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95655 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95656 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95657 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95658 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95659 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95660 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95661 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95662 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95663 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95664 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95665 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95666 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95667 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95668 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95669 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95670 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95671 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95672 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95673 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95674 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95675 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95676 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95677 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95678 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95679 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CLASS_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95680 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95681 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95682 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95683 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95684 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95685 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95686 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95687 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95688 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95689 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95690 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95691 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95692 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95693 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95694 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95695 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95696 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95697 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95698 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95699 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95700 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95701 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95702 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95703 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95704 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95705 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95706 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95707 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95708 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95709 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95710 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95711 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95712 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95713 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95714 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95715 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95716 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95717 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95718 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95719 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95720 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95721 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95722 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95723 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95724 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95725 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95726 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95727 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95728 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95729 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95730 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95731 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95732 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95733 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95734 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95735 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95736 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95737 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95738 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95739 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95740 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95741 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95742 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95743 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95744 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95745 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95746 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95747 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95748 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95749 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95750 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95751 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95752 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95753 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95754 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95755 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95756 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95757 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95758 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95759 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95760 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95761 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95762 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95763 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95764 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95765 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95766 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95767 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95768 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95769 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95770 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95771 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95772 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95773 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95774 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95775 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95776 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95777 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95778 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95779 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95780 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95781 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95782 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95783 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95784 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95785 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95786 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95787 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95788 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95789 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95790 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95791 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95792 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95793 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95794 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95795 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95796 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95797 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95798 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95799 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95800 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95801 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95802 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95803 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95804 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95805 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95806 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95807 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95808 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95809 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95810 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95811 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95812 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95813 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95814 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95815 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95816 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95817 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95818 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95819 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95820 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95821 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95822 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95823 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95824 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95825 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95826 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95827 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95828 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95829 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95830 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95831 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95832 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95833 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95834 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95835 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95836 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95837 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95838 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95839 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95840 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95841 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95842 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95843 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95844 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95845 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95846 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95847 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95848 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95849 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95850 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95851 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95852 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95853 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95854 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95855 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95856 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95857 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95858 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95859 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95860 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95861 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95862 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95863 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95864 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95865 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95866 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95867 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95868 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95869 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95870 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95871 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95872 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95873 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95874 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95875 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95876 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95877 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95878 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95879 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95880 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95881 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95882 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95883 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95884 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95885 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95886 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95887 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95888 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95889 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95890 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95891 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95892 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95893 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95894 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95895 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95896 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95897 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95898 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95899 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95900 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95901 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95902 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95903 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95904 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95905 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95906 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95907 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95908 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95909 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95910 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95911 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95912 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95913 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95914 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95915 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95916 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95917 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95918 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95919 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95920 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95921 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95922 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95923 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95924 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95925 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95926 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95927 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95928 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95929 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95930 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95931 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95932 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95933 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95934 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95935 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95936 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95937 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95938 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95939 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95940 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95941 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95942 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95943 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95944 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95945 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95946 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95947 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95948 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95949 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95950 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95951 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95952 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95953 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95954 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95955 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95956 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95957 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95958 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95959 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95960 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95961 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95962 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95963 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95964 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95965 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95966 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95967 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95968 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95969 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95970 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95971 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95972 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95973 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95974 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95975 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95976 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95977 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95978 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95979 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95980 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95981 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95982 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95983 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95984 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95985 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95986 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95987 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95988 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95989 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95990 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95991 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95992 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95993 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95994 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95995 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95996 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			95997 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95998 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			95999 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
