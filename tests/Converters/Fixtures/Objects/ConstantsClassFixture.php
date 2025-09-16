<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects;

use CodeKandis\ToolKit\Tests\Converters\Fixtures\Values;

/**
 * Represents a class fixture.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ConstantsClassFixture
{
	/**
	 * Represents a `null` value.
	 * @var null
	 */
	public const null NULL = Values::NULL;

	/**
	 * Represents a `null string` value.
	 * @var string
	 */
	public const string NULL_STRING = Values::NULL_STRING;

	/**
	 * Represents a `boolean false` value.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = Values::BOOLEAN_FALSE;

	/**
	 * Represents a `boolean true` value.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = Values::BOOLEAN_TRUE;

	/**
	 * Represents an array of `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_ARRAY = Values::BOOLEAN_ARRAY;

	/**
	 * Represents a `boolean integer false` value.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_FALSE = Values::BOOLEAN_INTEGER_FALSE;

	/**
	 * Represents a `boolean integer true` value.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_TRUE = Values::BOOLEAN_INTEGER_TRUE;

	/**
	 * Represents a `boolean string false` value.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = Values::BOOLEAN_STRING_FALSE;

	/**
	 * Represents a `boolean string true` value.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = Values::BOOLEAN_STRING_TRUE;

	/**
	 * Represents a `boolean integer string false` value.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = Values::BOOLEAN_INTEGER_STRING_FALSE;

	/**
	 * Represents a `boolean integer string true` value.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = Values::BOOLEAN_INTEGER_STRING_TRUE;

	/**
	 * Represents an `integer` value.
	 * @var int
	 */
	public const int INTEGER = Values::INTEGER;

	/**
	 * Represents an `integer string` value.
	 * @var string
	 */
	public const string INTEGER_STRING = Values::INTEGER_STRING;

	/**
	 * Represents a `float` value.
	 * @var float
	 */
	public const float FLOAT = Values::FLOAT;

	/**
	 * Represents a `float string` value.
	 * @var string
	 */
	public const string FLOAT_STRING = Values::FLOAT_STRING;

	/**
	 * Represents a `binary string` value.
	 * @var string
	 */
	public const string BINARY_STRING = '101010';

	/**
	 * Represents a `DateTime string` value.
	 * @var string
	 */
	public const string DATETIME_STRING = '1990-05-14 12:24:49.123456';

	/**
	 * Represents an `enum` value.
	 * @var EnumFixture
	 */
	public const EnumFixture ENUM = EnumFixture::FourthCase;
}
