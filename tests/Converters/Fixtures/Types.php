<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\Fixtures;

use CodeKandis\Types\TypeHintTypes;
use function get_resource_type;

/**
 * Represents an enumeration of types.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Types
{
	/**
	 * Gets the type hint `null` type.
	 * @var string
	 */
	public const string TYPE_HINT_NULL = 'null';

	/**
	 * Gets the type hint `closed resource`.
	 * @var string
	 */
	public const string TYPE_HINT_CLOSED_RESOURCE = 'closed-resource';

	/**
	 * Gets the type hint `array`.
	 * @var string
	 */
	public const string TYPE_HINT_ARRAY = 'array';

	/**
	 * Gets the type hint `integer`.
	 * @var string
	 */
	public const string TYPE_HINT_INTEGER = 'int';

	/**
	 * Gets the type hint `float`.
	 * @var string
	 */
	public const string TYPE_HINT_FLOAT = 'float';

	/**
	 * Gets the type hint `string`.
	 * @var string
	 */
	public const string TYPE_HINT_STRING = 'string';

	/**
	 * Creates a type hint typed `resource` type of a specific resource.
	 * @param resource $resource The resource to create the type hint typed `resource` type from.
	 * @return string The created type hint typed `resource` type.
	 */
	public static function createTypeHintTypedResourceTypeByResource( $resource ): string
	{
		return new TypeHintTypes()->createTypedResource(
			get_resource_type( $resource )
		);
	}

	/**
	 * Creates a type hint typed `object` type of a specific object.
	 * @param object $object The object to create the type hint typed `object` type from.
	 * @return string The created type hint typed `object` type.
	 */
	public static function createTypeHintTypedObjectTypeByObject( object $object ): string
	{
		return new TypeHintTypes()->createTypedObject( $object::class );
	}

	/**
	 * Creates a type hint typed `boolean` type of a specific value.
	 * @param bool $value The value to create the type hint typed `boolean` type from.
	 * @return string The created type hint typed `boolean` type.
	 */
	public static function createTypeHintTypedBooleanTypeByValue( bool $value ): string
	{
		return new TypeHintTypes()->createTypedBoolean( $value );
	}
}
