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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0029 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			29000 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29001 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29002 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29003 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29004 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29005 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29006 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29007 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29008 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29009 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29010 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29011 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29012 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29013 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29014 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29015 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29016 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29017 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29018 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29019 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29020 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29021 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29022 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29023 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29024 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29025 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29026 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29027 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29028 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29029 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29030 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29031 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29032 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29033 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29034 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29035 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29036 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29037 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29038 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29039 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29040 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29041 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29042 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29043 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29044 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29045 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29046 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29047 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29048 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29049 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29050 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29051 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29052 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29053 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29054 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29055 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29056 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29057 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29058 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29059 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29060 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29061 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29062 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29063 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29064 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29065 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29066 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29067 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29068 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29069 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29070 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29071 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29072 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29073 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29074 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29075 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29076 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29077 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			29078 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			29079 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29080 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29081 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29082 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29083 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29084 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29085 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29086 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29087 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29088 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29089 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29090 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29091 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29092 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29093 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29094 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29095 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29096 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29097 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29098 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29099 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29100 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29101 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29102 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29103 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29104 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29105 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29106 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29107 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29108 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29109 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29110 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29111 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29112 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29113 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29114 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29115 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29116 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29117 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29118 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29119 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29120 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29121 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29122 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29123 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29124 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29125 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29126 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29127 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29128 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29129 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29130 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29131 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29132 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29133 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29134 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29135 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29136 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29137 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29138 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29139 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29140 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29141 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29142 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29143 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29144 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29145 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29146 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29147 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29148 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29149 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29150 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29151 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29152 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29153 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29154 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29155 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29156 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29157 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29158 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29159 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29160 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29161 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29162 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29163 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29164 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29165 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29166 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29167 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29168 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29169 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29170 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29171 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29172 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29173 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29174 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29175 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29176 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29177 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29178 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29179 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29180 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29181 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29182 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29183 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29184 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29185 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29186 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29187 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29188 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29189 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29190 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29191 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29192 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29193 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29194 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29195 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29196 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29197 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29198 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29199 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29200 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29201 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29202 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29203 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29204 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29205 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29206 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29207 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29208 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29209 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29210 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29211 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29212 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29213 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29214 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29215 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29216 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29217 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29218 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29219 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29220 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29221 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29222 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29223 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29224 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29225 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29226 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29227 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29228 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29229 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29230 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29231 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29232 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29233 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29234 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29235 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29236 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29237 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29238 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29239 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29240 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29241 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29242 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29243 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29244 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29245 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29246 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29247 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29248 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29249 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29250 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29251 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29252 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29253 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29254 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29255 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29256 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29257 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29258 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29259 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29260 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29261 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29262 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29263 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29264 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29265 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29266 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29267 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29268 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29269 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29270 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29271 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29272 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29273 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29274 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29275 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29276 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29277 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29278 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29279 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29280 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29281 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29282 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29283 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29284 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29285 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29286 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29287 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29288 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29289 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29290 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29291 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			29292 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29293 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29294 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29295 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29296 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29297 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29298 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29299 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29300 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29301 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29302 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29303 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29304 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29305 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29306 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29307 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29308 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29309 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29310 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29311 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29312 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29313 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29314 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29315 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29316 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29317 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29318 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29319 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29320 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29321 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29322 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29323 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29324 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29325 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29326 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29327 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29328 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29329 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29330 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29331 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29332 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29333 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29334 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29335 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29336 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29337 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29338 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29339 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29340 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29341 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29342 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29343 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29344 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29345 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29346 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29347 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29348 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29349 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29350 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29351 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29352 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29353 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29354 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29355 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29356 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29357 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29358 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29359 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29360 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29361 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29362 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29363 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29364 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29365 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29366 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29367 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29368 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29369 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29370 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29371 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29372 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29373 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29374 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29375 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29376 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29377 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29378 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29379 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29380 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29381 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29382 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29383 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29384 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29385 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29386 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29387 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29388 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29389 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29390 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29391 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29392 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29393 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29394 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29395 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29396 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29397 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29398 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29399 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29400 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29401 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29402 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29403 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29404 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29405 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29406 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29407 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29408 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29409 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29410 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29411 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29412 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29413 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29414 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29415 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29416 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29417 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29418 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29419 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29420 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29421 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29422 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29423 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29424 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29425 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29426 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29427 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29428 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29429 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29430 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29431 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29432 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29433 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29434 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29435 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29436 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29437 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29438 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29439 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29440 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29441 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29442 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29443 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29444 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29445 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29446 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29447 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29448 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29449 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29450 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29451 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29452 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29453 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29454 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29455 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29456 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29457 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29458 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29459 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29460 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29461 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29462 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29463 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29464 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29465 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29466 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29467 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29468 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29469 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29470 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29471 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29472 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29473 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29474 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29475 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29476 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29477 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29478 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29479 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29480 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29481 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29482 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29483 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29484 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29485 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29486 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29487 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29488 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29489 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29490 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29491 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29492 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29493 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29494 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29495 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29496 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29497 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29498 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29499 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29500 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			29501 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29502 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29503 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29504 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29505 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29506 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29507 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29508 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29509 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29510 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29511 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29512 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29513 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29514 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29515 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29516 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29517 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29518 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29519 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29520 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29521 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29522 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29523 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29524 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29525 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29526 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29527 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29528 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29529 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29530 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29531 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29532 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29533 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29534 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29535 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29536 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29537 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29538 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29539 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29540 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29541 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29542 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29543 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29544 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29545 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29546 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29547 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29548 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29549 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29550 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29551 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29552 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29553 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29554 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29555 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29556 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29557 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29558 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29559 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29560 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29561 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29562 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29563 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29564 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29565 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29566 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29567 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29568 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29569 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29570 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29571 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29572 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29573 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29574 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29575 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29576 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29577 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29578 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29579 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29580 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29581 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29582 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29583 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29584 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29585 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29586 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29587 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29588 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29589 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29590 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29591 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29592 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29593 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29594 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29595 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29596 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29597 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29598 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29599 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29600 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29601 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29602 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29603 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29604 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29605 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29606 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29607 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29608 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29609 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29610 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29611 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29612 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29613 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29614 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29615 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29616 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29617 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29618 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29619 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29620 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29621 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29622 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29623 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29624 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29625 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29626 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29627 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29628 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29629 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29630 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29631 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29632 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29633 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29634 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29635 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29636 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29637 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29638 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29639 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29640 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29641 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29642 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29643 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29644 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29645 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29646 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29647 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29648 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29649 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29650 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29651 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29652 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29653 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29654 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29655 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29656 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29657 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29658 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29659 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29660 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29661 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29662 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29663 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29664 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29665 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29666 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29667 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29668 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29669 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29670 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29671 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29672 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29673 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29674 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29675 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29676 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29677 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29678 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29679 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29680 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29681 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29682 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29683 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29684 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29685 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29686 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29687 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29688 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29689 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29690 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29691 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29692 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29693 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29694 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29695 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29696 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29697 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29698 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29699 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29700 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29701 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29702 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29703 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29704 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29705 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29706 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29707 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			29708 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			29709 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29710 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29711 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29712 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29713 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29714 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29715 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29716 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29717 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29718 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29719 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29720 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29721 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29722 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29723 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29724 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29725 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29726 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29727 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29728 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29729 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29730 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29731 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29732 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29733 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29734 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29735 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29736 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29737 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29738 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29739 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29740 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29741 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29742 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29743 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29744 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29745 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29746 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29747 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29748 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29749 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29750 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29751 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29752 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29753 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29754 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29755 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29756 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29757 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29758 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29759 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29760 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29761 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29762 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29763 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29764 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29765 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29766 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29767 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29768 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29769 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29770 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29771 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29772 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29773 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29774 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29775 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29776 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29777 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29778 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29779 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29780 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29781 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29782 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29783 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29784 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29785 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29786 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29787 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29788 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29789 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29790 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29791 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29792 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29793 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29794 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29795 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29796 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29797 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29798 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29799 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29800 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29801 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29802 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29803 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29804 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29805 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29806 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29807 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29808 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29809 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29810 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29811 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29812 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29813 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29814 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29815 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29816 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29817 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29818 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29819 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29820 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29821 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29822 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29823 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29824 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29825 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29826 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29827 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29828 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29829 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29830 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29831 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29832 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29833 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29834 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29835 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29836 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29837 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29838 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29839 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29840 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29841 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29842 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29843 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29844 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29845 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29846 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29847 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29848 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29849 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29850 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29851 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29852 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29853 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29854 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29855 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29856 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29857 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29858 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29859 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29860 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29861 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29862 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29863 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29864 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29865 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29866 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29867 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29868 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29869 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29870 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29871 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29872 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29873 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29874 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29875 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29876 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29877 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29878 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29879 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29880 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29881 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29882 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29883 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29884 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29885 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29886 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29887 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29888 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29889 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29890 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29891 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29892 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29893 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29894 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29895 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29896 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29897 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29898 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29899 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29900 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29901 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29902 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29903 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29904 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29905 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29906 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29907 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29908 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29909 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29910 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29911 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29912 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29913 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29914 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29915 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			29916 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			29917 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29918 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29919 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29920 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29921 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29922 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29923 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29924 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29925 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29926 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29927 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29928 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29929 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29930 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29931 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29932 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29933 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29934 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29935 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29936 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29937 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29938 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29939 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29940 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29941 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29942 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29943 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29944 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29945 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29946 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29947 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29948 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29949 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29950 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29951 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeObjectMixedArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29952 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29953 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29954 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29955 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29956 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29957 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29958 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29959 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29960 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29961 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29962 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29963 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29964 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29965 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29966 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29967 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29968 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29969 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29970 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29971 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29972 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29973 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29974 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29975 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29976 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29977 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29978 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29979 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29980 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29981 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29982 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29983 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29984 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29985 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29986 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29987 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29988 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29989 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29990 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29991 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29992 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29993 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29994 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29995 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29996 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29997 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29998 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			29999 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeZoneObjectArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
