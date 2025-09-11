<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects;

use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;

/**
 * Represents an interface fixture.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InterfaceFixture2
{
	/**
	 * Represents an array of the value `null`.
	 * @var null[]
	 */
	public const array NULL_ARRAY = Values::NULL_ARRAY;

	/**
	 * Represents a `string` representing the value `null`.
	 * @var string
	 */
	public const string NULL_STRING = Values::NULL_STRING;

	/**
	 * Represents an array of `string` representing the value `null`.
	 * @var string[]
	 */
	public const array NULL_STRING_ARRAY = Values::NULL_STRING_ARRAY;

	/**
	 * Represents an empty `string`.
	 * @var string
	 */
	public const string EMPTY_STRING = Values::EMPTY_STRING;

	/**
	 * Represents a `boolean` representing the value `true`.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = Values::BOOLEAN_TRUE;

	/**
	 * Represents an array of `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_ARRAY_2 = Values::BOOLEAN_ARRAY_2;

	/**
	 * Represents an array of mixed `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_MIXED_ARRAY_2 = Values::BOOLEAN_MIXED_ARRAY_2;

	/**
	 * Represents a `boolean integer` representing the value `true`.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_TRUE = Values::BOOLEAN_INTEGER_TRUE;

	/**
	 * Represents an array of `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_ARRAY_2 = Values::BOOLEAN_INTEGER_ARRAY_2;

	/**
	 * Represents an array of mixed `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_MIXED_ARRAY_2 = Values::BOOLEAN_INTEGER_MIXED_ARRAY_2;

	/**
	 * Represents a `boolean integer string` representing value `true`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = Values::BOOLEAN_INTEGER_STRING_TRUE;

	/**
	 * Represents an array of `boolean integer string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_ARRAY_2 = Values::BOOLEAN_INTEGER_STRING_ARRAY_2;

	/**
	 * Represents an array of mixed `boolean integer string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2 = Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2;

	/**
	 * Represents a `boolean string` representing the value `true`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = Values::BOOLEAN_STRING_TRUE;

	/**
	 * Represents an array of `boolean string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_ARRAY_2 = Values::BOOLEAN_STRING_ARRAY_2;

	/**
	 * Represents an array of mixed `boolean string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_MIXED_ARRAY_2 = Values::BOOLEAN_STRING_MIXED_ARRAY_2;

	/**
	 * Represents an `integer` representing the value `42`.
	 * @var int
	 */
	public const int INTEGER_42 = Values::INTEGER_42;

	/**
	 * Represents an array of `integer` values.
	 * @var integer[]
	 */
	public const array INTEGER_ARRAY_2 = Values::INTEGER_ARRAY_2;

	/**
	 * Represents an array of mixed `integer` values.
	 * @var integer[]
	 */
	public const array INTEGER_MIXED_ARRAY_2 = Values::INTEGER_MIXED_ARRAY_2;

	/**
	 * Represents an `integer string` representing the value `42`.
	 * @var string
	 */
	public const string INTEGER_STRING_42 = Values::INTEGER_STRING_42;

	/**
	 * Represents an array of `integer string` values.
	 * @var string[]
	 */
	public const array INTEGER_STRING_ARRAY_2 = Values::INTEGER_STRING_ARRAY_2;

	/**
	 * Represents an array of mixed `integer string` values.
	 * @var string[]
	 */
	public const array INTEGER_STRING_MIXED_ARRAY_2 = Values::INTEGER_STRING_MIXED_ARRAY_2;

	/**
	 * Represents a `float` representing the value `42.42`.
	 * @var float
	 */
	public const float FLOAT_42 = Values::FLOAT_42;

	/**
	 * Represents an array of `float` values.
	 * @var float[]
	 */
	public const array FLOAT_ARRAY_2 = Values::FLOAT_ARRAY_2;

	/**
	 * Represents an array of mixed `float` values.
	 * @var float[]
	 */
	public const array FLOAT_MIXED_ARRAY_2 = Values::FLOAT_MIXED_ARRAY_2;

	/**
	 * Represents a `float string` representing the value `42.42`.
	 * @var string
	 */
	public const string FLOAT_STRING_42 = Values::FLOAT_STRING_42;

	/**
	 * Represents an array of `float string` values.
	 * @var string[]
	 */
	public const array FLOAT_STRING_ARRAY_2 = Values::FLOAT_STRING_ARRAY_2;

	/**
	 * Represents an array of mixed `float string` values.
	 * @var string[]
	 */
	public const array FLOAT_STRING_MIXED_ARRAY_2 = Values::FLOAT_STRING_MIXED_ARRAY_2;

	/**
	 * Represents a `binary string` representing the value `42`.
	 * @var string
	 */
	public const string BINARY_STRING_42 = Values::BINARY_STRING_42;

	/**
	 * Represents an array of `binary string` values.
	 * @var string[]
	 */
	public const array BINARY_STRING_ARRAY_2 = Values::BINARY_STRING_ARRAY_2;

	/**
	 * Represents an array of mixed `binary string` values.
	 * @var string[]
	 */
	public const array BINARY_STRING_MIXED_ARRAY_2 = Values::BINARY_STRING_MIXED_ARRAY_2;

	/**
	 * Represents a `string` representing a `DateTime` value.
	 * @var string
	 */
	public const string DATETIME_STRING_2 = Values::DATETIME_STRING_2;

	/**
	 * Represents an array of `DateTime string` values.
	 * @var string[]
	 */
	public const array DATETIME_STRING_ARRAY_2 = Values::DATETIME_STRING_ARRAY_2;

	/**
	 * Represents an array of mixed `DateTime string` values.
	 * @var string[]
	 */
	public const array DATETIME_STRING_MIXED_ARRAY_2 = Values::DATETIME_STRING_MIXED_ARRAY_2;

	/**
	 * Represents an `enum` value.
	 * @var EnumFixture2
	 */
	public const EnumFixture2 ENUM_2 = Values::ENUM_2;

	/**
	 * Represents an array of `enum` values.
	 * @var EnumFixture2[]
	 */
	public const array ENUM_ARRAY_2 = Values::ENUM_ARRAY_2;

	/**
	 * Represents an array of mixed `enum` values.
	 * @var object[]
	 */
	public const array ENUM_MIXED_ARRAY_2 = Values::ENUM_MIXED_ARRAY_2;

	/**
	 * Represents an `integer backed enum` value.
	 * @var IntegerBackedEnumFixture2
	 */
	public const IntegerBackedEnumFixture2 INTEGER_BACKED_ENUM_2 = Values::INTEGER_BACKED_ENUM_2;

	/**
	 * Represents an array of `integer backed enum` values.
	 * @var IntegerBackedEnumFixture2[]
	 */
	public const array INTEGER_BACKED_ENUM_ARRAY_2 = Values::INTEGER_BACKED_ENUM_ARRAY_2;

	/**
	 * Represents an array of mixed `integer backed enum` values.
	 * @var object[]
	 */
	public const array INTEGER_BACKED_ENUM_MIXED_ARRAY_2 = Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2;

	/**
	 * Represents an `string backed enum` value.
	 * @var StringBackedEnumFixture2
	 */
	public const StringBackedEnumFixture2 STRING_BACKED_ENUM_2 = Values::STRING_BACKED_ENUM_2;

	/**
	 * Represents an array of `string backed enum` values.
	 * @var StringBackedEnumFixture2[]
	 */
	public const array STRING_BACKED_ENUM_ARRAY_2 = Values::STRING_BACKED_ENUM_ARRAY_2;

	/**
	 * Represents an array of mixed `string backed enum` values.
	 * @var object[]
	 */
	public const array STRING_BACKED_ENUM_MIXED_ARRAY_2 = Values::STRING_BACKED_ENUM_MIXED_ARRAY_2;
}
