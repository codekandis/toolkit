<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\Fixtures;

use CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects\EnumFixture;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects\IntegerBackedEnumFixture;
use CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects\StringBackedEnumFixture;
use function fclose;
use function fopen;

/**
 * Represents an enumeration of typed values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class TypedValues
{
	/**
	 * Represents a `null` typed value.
	 * @var null
	 */
	public const null NULL   = null;

	/**
	 * Represents an `array` typed value.
	 * @var array
	 */
	public const array ARRAY = [];

	/**
	 * Represents a `nonboolean array` typed value.
	 * @var mixed[]
	 */
	public const array NONBOOLEAN_ARRAY = [
		self::INTEGER,
		self::FLOAT
	];

	/**
	 * Represents a `boolean false` typed value.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean true` typed value.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents an `integer` typed value.
	 * @var int
	 */
	public const int INTEGER = 42;

	/**
	 * Represents a `float` typed value.
	 * @var float
	 */
	public const float FLOAT = 42.42;

	/**
	 * Represents a `string` typed value.
	 * @var string
	 */
	public const string STRING = 'foobar';

	/**
	 * Represents an `enum` typed value.
	 * @var EnumFixture
	 */
	public const EnumFixture ENUM = EnumFixture::FourthCase;

	/**
	 * Represents an `integer backed enum` typed value.
	 * @var IntegerBackedEnumFixture
	 */
	public const IntegerBackedEnumFixture INTEGER_BACKED_ENUM = IntegerBackedEnumFixture::FourthCaseInteger;

	/**
	 * Represents an `string backed enum` typed value.
	 * @var StringBackedEnumFixture
	 */
	public const StringBackedEnumFixture STRING_BACKED_ENUM = StringBackedEnumFixture::FourthCaseString;

	/**
	 * Creates a `resource` typed value.
	 * @return resource The created `resource` typed value.
	 */
	public static function createResource()
	{
		return fopen( 'php://memory', 'rb' );
	}

	/**
	 * Creates a `closed resource` typed value.
	 * @return resource The created `closed resource` typed value.
	 */
	public static function createClosedResource()
	{
		$resource = static::createResource();
		fclose( $resource );

		return $resource;
	}

	/**
	 * Creates an `object` typed value.
	 * @return object The created `object` typed value.
	 */
	public static function createObject(): object
	{
		return new class()
		{
		};
	}
}
