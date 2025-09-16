<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\Fixtures;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidValues
{
	/**
	 * Represents a value `null`.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents a `string` representing the value `null`.
	 * @var string
	 */
	public const string NULL_STRING = 'null';

	/**
	 * Represents a `boolean integer` representing the `boolean` value `false`.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer` representing the `boolean` value `true`.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_TRUE = 1;

	/**
	 * Represents a set of `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_SET = [
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE
	];

	/**
	 * Represents a `boolean string` representing the `boolean` value `false`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string` representing the `boolean` value `true`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents a set of `boolean string`.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_SET = [
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_TRUE
	];

	/**
	 * Represents a `boolean integer string` representing the `boolean` value `false`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string` representing the `boolean` value `true`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents a set of `boolean integer string`.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_SET = [
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_TRUE
	];

	/**
	 * Represents a regular expression of a `binary string` value.
	 * @var string
	 */
	public const string REG_EX_BINARY_STRING = '~^[01]+$~';

	/**
	 * Represents a regular expression of an `integer string` value.
	 * @var string
	 */
	public const string REG_EX_INTEGER_STRING = '~^\\-?\d+$~';

	/**
	 * Represents a regular expression of a `float string` value.
	 * @var string
	 */
	public const string REG_EX_FLOAT_STRING = '~^\\-?\d+(?:\\.\d+)?$~';
}
