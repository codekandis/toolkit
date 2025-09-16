<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0041 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			41000 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41001 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41002 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41003 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41004 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41005 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41006 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41007 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41008 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41009 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41010 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41011 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41012 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41013 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41014 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41015 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41016 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41017 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41018 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41019 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41020 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41021 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41022 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41023 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41024 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41025 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41026 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41027 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41028 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41029 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41030 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41031 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41032 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41033 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41034 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41035 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41036 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41037 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41038 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41039 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41040 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41041 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41042 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41043 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41044 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41045 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41046 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41047 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41048 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41049 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41050 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41051 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41052 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41053 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41054 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41055 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41056 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41057 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41058 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			41059 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41060 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41061 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41062 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41063 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41064 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41065 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41066 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41067 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41068 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41069 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41070 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41071 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41072 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41073 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41074 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41075 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41076 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41077 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41078 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41079 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41080 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41081 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41082 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41083 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41084 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41085 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41086 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41087 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41088 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41089 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41090 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41091 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41092 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41093 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41094 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41095 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41096 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41097 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41098 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41099 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41100 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41101 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41102 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41103 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41104 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41105 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41106 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41107 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41108 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41109 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41110 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41111 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41112 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41113 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41114 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41115 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41116 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41117 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41118 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41119 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41120 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41121 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41122 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41123 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41124 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41125 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41126 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41127 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41128 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41129 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41130 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41131 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41132 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41133 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41134 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41135 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41136 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41137 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41138 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41139 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41140 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41141 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41142 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41143 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41144 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41145 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41146 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41147 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41148 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41149 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41150 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41151 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41152 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41153 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41154 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41155 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41156 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41157 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41158 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41159 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41160 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41161 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41162 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41163 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41164 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41165 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41166 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41167 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41168 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41169 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41170 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41171 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41172 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41173 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41174 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41175 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41176 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41177 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41178 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41179 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41180 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41181 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41182 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41183 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41184 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41185 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41186 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41187 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41188 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41189 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41190 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41191 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41192 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41193 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41194 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41195 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41196 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41197 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41198 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41199 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41200 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41201 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41202 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41203 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41204 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41205 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41206 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41207 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41208 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41209 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41210 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41211 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41212 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41213 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41214 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41215 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41216 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41217 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41218 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41219 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41220 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41221 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41222 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41223 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41224 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41225 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41226 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41227 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41228 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41229 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41230 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41231 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41232 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41233 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41234 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41235 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41236 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41237 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41238 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41239 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41240 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41241 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41242 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41243 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41244 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41245 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41246 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41247 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41248 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41249 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41250 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41251 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41252 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41253 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41254 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41255 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41256 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41257 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41258 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41259 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41260 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41261 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41262 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41263 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41264 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41265 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41266 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41267 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41268 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41269 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41270 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41271 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41272 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41273 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41274 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41275 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41276 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41277 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			41278 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41279 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41280 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41281 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41282 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41283 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41284 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41285 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41286 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41287 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41288 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41289 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41290 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41291 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41292 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41293 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41294 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41295 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41296 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41297 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41298 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41299 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41300 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41301 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41302 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41303 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41304 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41305 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41306 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41307 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41308 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41309 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41310 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41311 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41312 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41313 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41314 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41315 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41316 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41317 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41318 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41319 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41320 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41321 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41322 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41323 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41324 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41325 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41326 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41327 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41328 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41329 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41330 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41331 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41332 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41333 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41334 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41335 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41336 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41337 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41338 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41339 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41340 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41341 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41342 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41343 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41344 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41345 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41346 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41347 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41348 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41349 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41350 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41351 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41352 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41353 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41354 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41355 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41356 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41357 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41358 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41359 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41360 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41361 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41362 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41363 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41364 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41365 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41366 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41367 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41368 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41369 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41370 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41371 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41372 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41373 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41374 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41375 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41376 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41377 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41378 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41379 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41380 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41381 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41382 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41383 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41384 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41385 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41386 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41387 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41388 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41389 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41390 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41391 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41392 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41393 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41394 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41395 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41396 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41397 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41398 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41399 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41400 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41401 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41402 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41403 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41404 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41405 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41406 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41407 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41408 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41409 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41410 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41411 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41412 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41413 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41414 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41415 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41416 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41417 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41418 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41419 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41420 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41421 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41422 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41423 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41424 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41425 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41426 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41427 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41428 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41429 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41430 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41431 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41432 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41433 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41434 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41435 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41436 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41437 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41438 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41439 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41440 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41441 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41442 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41443 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41444 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41445 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41446 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41447 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41448 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41449 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41450 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41451 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41452 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41453 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41454 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41455 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41456 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41457 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41458 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41459 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41460 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41461 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41462 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41463 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41464 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41465 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41466 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41467 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41468 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41469 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41470 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41471 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41472 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41473 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41474 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41475 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41476 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41477 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41478 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41479 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41480 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41481 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41482 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41483 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41484 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41485 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41486 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			41487 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41488 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41489 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41490 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41491 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41492 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41493 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41494 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41495 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41496 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41497 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41498 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41499 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41500 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41501 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41502 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41503 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41504 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41505 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41506 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41507 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41508 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41509 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41510 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41511 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41512 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41513 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41514 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41515 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41516 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41517 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41518 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41519 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41520 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41521 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41522 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41523 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41524 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41525 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41526 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41527 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41528 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41529 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41530 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41531 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41532 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41533 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41534 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41535 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41536 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41537 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41538 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41539 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41540 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41541 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41542 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41543 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41544 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41545 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41546 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41547 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41548 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41549 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41550 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41551 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41552 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41553 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41554 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41555 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41556 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41557 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41558 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41559 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41560 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41561 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41562 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41563 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41564 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41565 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41566 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41567 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41568 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41569 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41570 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41571 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41572 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41573 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41574 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41575 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41576 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41577 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41578 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41579 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41580 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41581 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41582 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41583 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41584 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41585 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41586 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41587 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41588 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41589 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41590 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41591 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41592 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41593 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41594 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41595 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41596 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41597 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41598 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41599 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41600 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41601 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41602 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41603 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41604 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41605 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41606 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41607 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41608 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41609 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41610 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41611 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41612 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41613 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41614 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41615 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41616 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41617 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41618 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41619 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41620 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41621 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41622 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41623 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41624 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41625 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41626 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41627 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41628 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41629 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41630 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41631 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41632 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41633 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41634 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41635 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41636 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41637 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41638 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41639 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41640 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41641 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41642 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41643 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41644 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41645 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41646 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41647 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41648 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41649 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41650 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41651 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41652 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41653 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41654 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41655 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41656 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41657 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41658 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41659 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41660 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41661 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41662 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41663 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41664 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41665 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41666 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41667 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41668 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41669 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41670 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41671 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41672 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41673 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41674 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41675 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41676 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41677 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41678 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41679 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41680 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41681 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41682 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41683 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41684 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41685 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41686 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41687 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41688 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41689 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41690 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41691 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41692 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41693 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41694 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41695 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41696 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41697 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41698 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41699 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41700 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41701 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41702 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41703 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41704 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41705 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			41706 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41707 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41708 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41709 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41710 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41711 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41712 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41713 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41714 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41715 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41716 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41717 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41718 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41719 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41720 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41721 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41722 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41723 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41724 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41725 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41726 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41727 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41728 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41729 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41730 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41731 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41732 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41733 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41734 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41735 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41736 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41737 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41738 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41739 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41740 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41741 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41742 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41743 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41744 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41745 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41746 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41747 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41748 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41749 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41750 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41751 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41752 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41753 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41754 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41755 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41756 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41757 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41758 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41759 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41760 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41761 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41762 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41763 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41764 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41765 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41766 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41767 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41768 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41769 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41770 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41771 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41772 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41773 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41774 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41775 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41776 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41777 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41778 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41779 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41780 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41781 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41782 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41783 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41784 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41785 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41786 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41787 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41788 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41789 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41790 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41791 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41792 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41793 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41794 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41795 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41796 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41797 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41798 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41799 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41800 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41801 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41802 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41803 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41804 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41805 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41806 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41807 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41808 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41809 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41810 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41811 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41812 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41813 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41814 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41815 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41816 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41817 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41818 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41819 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41820 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41821 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41822 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41823 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41824 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41825 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41826 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41827 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41828 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41829 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41830 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41831 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41832 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41833 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41834 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41835 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41836 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41837 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41838 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41839 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41840 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41841 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41842 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41843 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41844 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41845 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41846 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41847 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41848 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41849 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41850 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41851 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41852 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41853 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41854 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41855 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41856 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41857 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41858 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41859 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41860 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41861 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41862 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41863 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41864 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41865 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41866 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41867 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41868 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41869 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41870 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41871 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41872 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41873 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41874 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41875 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41876 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41877 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41878 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41879 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41880 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41881 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41882 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41883 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41884 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41885 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41886 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41887 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41888 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41889 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41890 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41891 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41892 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41893 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41894 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41895 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41896 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41897 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41898 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41899 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41900 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41901 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41902 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41903 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41904 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41905 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41906 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41907 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41908 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41909 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41910 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41911 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41912 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41913 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41914 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			41915 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41916 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41917 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41918 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41919 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41920 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41921 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41922 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41923 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41924 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41925 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41926 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41927 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41928 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41929 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41930 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41931 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41932 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41933 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41934 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41935 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41936 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41937 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41938 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41939 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41940 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41941 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41942 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41943 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41944 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41945 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41946 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41947 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41948 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41949 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41950 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41951 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41952 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41953 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41954 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41955 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41956 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41957 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41958 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41959 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41960 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41961 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41962 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41963 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41964 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41965 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41966 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41967 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41968 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41969 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41970 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41971 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41972 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41973 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41974 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41975 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41976 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41977 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41978 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41979 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41980 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41981 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41982 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41983 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41984 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41985 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41986 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41987 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41988 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41989 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41990 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41991 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41992 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41993 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41994 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41995 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41996 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41997 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41998 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			41999 => [
				'validator'                => new IsInstanceOfArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
