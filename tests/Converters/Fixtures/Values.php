<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\Fixtures;

use CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects\ConstantsClassFixture;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects\ConstantsInterfaceFixture;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects\EnumFixture;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects\IntegerBackedEnumFixture;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects\StringBackedEnumFixture;
use DateTime;
use DateTimeImmutable;
use DateTimeZone;
use function sprintf;

/**
 * Represents an enumeration of values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents a `null` value.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents a `null string` value.
	 * @var string
	 */
	public const string NULL_STRING = 'null';

	/**
	 * Represents a `boolean false` value.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean true` value.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents an array of `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_ARRAY = [
		self::BOOLEAN_TRUE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_FALSE,
		self::BOOLEAN_TRUE,
		self::BOOLEAN_FALSE
	];

	/**
	 * Represents a `boolean integer false` value.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer true` value.
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
	 * Represents a `boolean string false` value.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string true` value.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents the regular expression of a `boolean string` value.
	 * @var string
	 */
	public const string REG_EX_BOOLEAN_STRING = '~^false|true$~';

	/**
	 * Represents a `boolean integer string false` value.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string true` value.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents the regular expression of a `boolean integer string` value.
	 * @var string
	 */
	public const string REG_EX_BOOLEAN_INTEGER_STRING = '~^[01]$~';

	/**
	 * Represents an `integer` value.
	 * @var int
	 */
	public const int INTEGER = 42;

	/**
	 * Represents an `integer string` value.
	 * @var string
	 */
	public const string INTEGER_STRING = '42';

	/**
	 * Represents the regular expression of a `boolean` value.
	 * @var string
	 */
	public const string REG_EX_INTEGER_STRING = '~^\\-?\d+$~';

	/**
	 * Represents a `float` value.
	 * @var float
	 */
	public const float FLOAT = 42.24;

	/**
	 * Represents a `float string` value.
	 * @var string
	 */
	public const string FLOAT_STRING = '42.24';

	/**
	 * Represents the regular expression of a `float` value.
	 * @var string
	 */
	public const string REG_EX_FLOAT_STRING = '~^\\-?\d+(?:\\.\d+)?$~';

	/**
	 * Represents a `binary string` value.
	 * @var string
	 */
	public const string BINARY_STRING = '101010';

	/**
	 * Represents the regular expression of a `binary string` value.
	 * @var string
	 */
	public const string REG_EX_BINARY_STRING = '~^[01]+$~';

	/**
	 * Represents a `DateTime string` value.
	 * @var string
	 */
	public const string DATE_TIME_STRING = '1990-05-14 12:24:49.123456';

	/**
	 * Represents a `DateTime` format.
	 * @var string
	 */
	public const string DATE_TIME_FORMAT = 'Y-m-d H:i:s.u';

	/**
	 * Represents a UTC `DateTimeZone`.
	 * @var string
	 */
	public const string DATE_TIME_ZONE_UTC = 'UTC';

	/**
	 * Represents the template of a `DateTime string` value.
	 * @var string
	 */
	public const string DATE_TIME_STRING_TEMPLATE = 'dateTimeString<%s>';

	/**
	 * Represents an `enum` value.
	 * @var EnumFixture
	 */
	public const EnumFixture ENUM = EnumFixture::FourthCase;

	/**
	 * Represents the name of an `enum`.
	 * @var string
	 */
	public const string ENUM_NAME_VALUE = 'enumName';

	/**
	 * Represents the name of a `backed enum`.
	 * @var string
	 */
	public const string BACKED_ENUM_NAME_VALUE = 'backedEnumName';

	/**
	 * Represents the name of an `integer backed enum`.
	 * @var string
	 */
	public const string INTEGER_BACKED_ENUM_NAME_VALUE = 'backedEnumName<integer>';

	/**
	 * Represents the name of a `string backed enum`.
	 * @var string
	 */
	public const string STRING_BACKED_ENUM_NAME_VALUE = 'backedEnumName<string>';

	/**
	 * Represents the name of an `interface`.
	 * @var string
	 */
	public const string INTERFACE_NAME_VALUE = 'interfaceName';

	/**
	 * Represents the name of a `class`.
	 * @var string
	 */
	public const string CLASS_NAME_VALUE = 'className';

	/**
	 * Represents the name of an `interface` or `class`.
	 * @var string
	 */
	public const string INTERFACE_OR_CLASS_NAME_VALUE = 'interfaceOrClassName';

	/**
	 * Represents a constants interface name.
	 * @var string
	 */
	public const string CONSTANTS_INTERFACE_NAME = ConstantsInterfaceFixture::class;

	/**
	 * Represents a constants class name.
	 * @var string
	 */
	public const string CONSTANTS_CLASS_NAME = ConstantsClassFixture::class;

	/**
	 * Represents an enum name.
	 * @var string
	 */
	public const string ENUM_NAME = EnumFixture::class;

	/**
	 * Represents an `integer` backed enum name.
	 * @var string
	 */
	public const string INTEGER_BACKED_ENUM_NAME = IntegerBackedEnumFixture::class;

	/**
	 * Represents a `string` backed enum name.
	 * @var string
	 */
	public const string STRING_BACKED_ENUM_NAME = StringBackedEnumFixture::class;

	/**
	 * Represents a set of `constants` values.
	 * @var mixed[]
	 */
	public const array CONSTANTS_ARRAY = [
		'NULL'                         => self::NULL,
		'NULL_STRING'                  => self::NULL_STRING,
		'BOOLEAN_FALSE'                => self::BOOLEAN_FALSE,
		'BOOLEAN_TRUE'                 => self::BOOLEAN_TRUE,
		'BOOLEAN_ARRAY'                => self::BOOLEAN_ARRAY,
		'BOOLEAN_INTEGER_FALSE'        => self::BOOLEAN_INTEGER_FALSE,
		'BOOLEAN_INTEGER_TRUE'         => self::BOOLEAN_INTEGER_TRUE,
		'BOOLEAN_STRING_FALSE'         => self::BOOLEAN_STRING_FALSE,
		'BOOLEAN_STRING_TRUE'          => self::BOOLEAN_STRING_TRUE,
		'BOOLEAN_INTEGER_STRING_FALSE' => self::BOOLEAN_INTEGER_STRING_FALSE,
		'BOOLEAN_INTEGER_STRING_TRUE'  => self::BOOLEAN_INTEGER_STRING_TRUE,
		'INTEGER'                      => self::INTEGER,
		'INTEGER_STRING'               => self::INTEGER_STRING,
		'FLOAT'                        => self::FLOAT,
		'FLOAT_STRING'                 => self::FLOAT_STRING,
		'BINARY_STRING'                => self::BINARY_STRING,
		'DATETIME_STRING'              => self::DATE_TIME_STRING,
		'ENUM'                         => self::ENUM
	];

	/**
	 * Represents an array of `integer backed enum` keys.
	 * @var string[]
	 */
	public const array ENUM_KEYS = [
		'FirstCase',
		'SecondCase',
		'ThirdCase',
		'FourthCase',
		'FifthCase',
	];

	/**
	 * Represents an array of `integer backed enum` keys.
	 * @var string[]
	 */
	public const array INTEGER_BACKED_ENUM_KEYS = [
		'FirstCaseInteger',
		'SecondCaseInteger',
		'ThirdCaseInteger',
		'FourthCaseInteger',
		'FifthCaseInteger',
	];

	/**
	 * Represents an array of `integer backed enum` key value pairs.
	 * @var int[]
	 */
	public const array INTEGER_BACKED_ENUM_KEY_VALUE_PAIRS = [
		'FirstCaseInteger'  => 0,
		'SecondCaseInteger' => 1,
		'ThirdCaseInteger'  => 2,
		'FourthCaseInteger' => 3,
		'FifthCaseInteger'  => 4,
	];

	/**
	 * Represents an arry of `string backed enum` keys.
	 * @var string[]
	 */
	public const array STRING_BACKED_ENUM_KEYS = [
		'FirstCaseString',
		'SecondCaseString',
		'ThirdCaseString',
		'FourthCaseString',
		'FifthCaseString',
	];

	/**
	 * Represents an arry of `string backed enum` key value pairs.
	 * @var string[]
	 */
	public const array STRING_BACKED_ENUM_KEY_VALUE_PAIRS = [
		'FirstCaseString'  => '0',
		'SecondCaseString' => '1',
		'ThirdCaseString'  => '2',
		'FourthCaseString' => '3',
		'FifthCaseString'  => '4',
	];

	/**
	 * Creates a `DateTime string` value.
	 * @param string $format The format of the date time string.
	 * @return string The created `DateTime string` value.
	 */
	public static function createDateTimeString( string $format ): string
	{
		return sprintf( static::DATE_TIME_STRING_TEMPLATE, $format );
	}

	/**
	 * Creates a `DateTimeImmutable` object.
	 * @return DateTimeImmutable The created `DateTimeImmutable` object.
	 */
	public static function createDateTimeImmutableObject(): DateTimeImmutable
	{
		return new DateTimeImmutable( static::DATE_TIME_STRING );
	}

	/**
	 * Creates a `DateTime` object.
	 * @return DateTime The created `DateTime` object.
	 */
	public static function createDateTimeObject(): DateTime
	{
		return new DateTime( static::DATE_TIME_STRING );
	}

	/**
	 * Creates a `DateTimeZone` object.
	 * @return DateTimeZone The created `DateTimeZone` object.
	 */
	public static function createDateTimeZoneObject(): DateTimeZone
	{
		return new DateTimeZone( static::DATE_TIME_ZONE_UTC );
	}
}
