<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\Fixtures;

use function sprintf;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidValues
{
	/**
	 * Represents a `null` value.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents a `string` representing the value `null`.
	 * @var string
	 */
	public const string NULL_STRING = 'null';

	/**
	 * Represents a `boolean` representing the boolean value `false`.
	 * @var bool
	 */
	public const bool   BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean` representing the boolean value `true`.
	 * @var bool
	 */
	public const bool   BOOLEAN_TRUE = true;

	/**
	 * Represents a `boolean integer` representing the boolean value `false`.
	 * @var int
	 */
	public const int    BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer` representing the boolean value `true`.
	 * @var int
	 */
	public const int    BOOLEAN_INTEGER_TRUE = 1;

	/**
	 * Represents a set of `boolean integers`.
	 * @var int[]
	 */
	public const array  BOOLEAN_INTEGER_SET = [
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE
	];

	/**
	 * Represents a `boolean string` representing the boolean value `false`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string` representing the boolean value `true`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents a regular expression of a `boolean string` value.
	 * @var string
	 */
	public const string REG_EX_BOOLEAN_STRING = '~^false|true$~';

	/**
	 * Represents a `boolean integer string` representing the boolean value `false`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string` representing the boolean value `true`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents a regular expression of a `boolean integer string` value.
	 * @var string
	 */
	public const string REG_EX_BOOLEAN_INTEGER_STRING = '~^[01]$~';

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

	/**
	 * Represents a regular expression of a `binary string` value.
	 * @var string
	 */
	public const string REG_EX_BINARY_STRING = '~^[01]+$~';

	/**
	 * Represents a name of an `enum`.
	 * @var string
	 */
	public const string ENUM_NAME = 'enumName';

	/**
	 * Represents a name of a `backed enum`.
	 * @var string
	 */
	public const string BACKED_ENUM_NAME = 'backedEnumName';

	/**
	 * Represents a name of an `integer backed enum`.
	 * @var string
	 */
	public const string INTEGER_BACKED_ENUM_NAME = 'backedEnumName<integer>';

	/**
	 * Represents a name of a `string backed enum`.
	 * @var string
	 */
	public const string STRING_BACKED_ENUM_NAME = 'backedEnumName<string>';

	/**
	 * Represents a name of a `interface`.
	 * @var string
	 */
	public const string INTERFACE_NAME = 'interfaceName';

	/**
	 * Represents a name of a `class`.
	 * @var string
	 */
	public const string CLASS_NAME = 'className';

	/**
	 * Represents a name of an `interface` or `class`.
	 * @var string
	 */
	public const string INTERFACE_OR_CLASS_NAME = 'interfaceOrClassName';

	/**
	 * Represents a template of a `DateTime string`.
	 * @var string
	 */
	public const string DATE_TIME_STRING_TEMPLATE = 'dateTimeString<%s>';

	/**
	 * Creates a `DateTime string` by a specific format.
	 * @param string $format The format to create the `DateTime string` from.
	 * @return string The created `DateTime string` from.
	 */
	public static function createDateTimeString( string $format ): string
	{
		return sprintf( static::DATE_TIME_STRING_TEMPLATE, $format );
	}
}
