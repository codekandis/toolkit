<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\Fixtures;

/**
 * Represents an enumeration of expected types.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ExpectedTypes
{
	/**
	 * Represents a `NULL` type.
	 * @var string
	 */
	public const string NULL = 'null';

	/**
	 * Represents a `boolean` type.
	 * @var string
	 */
	public const string BOOLEAN = 'bool';

	/**
	 * Represents a `nullable boolean` type.
	 * @var string
	 */
	public const string NULLABLE_BOOLEAN = '?bool';

	/**
	 * Represents a `boolean array` type.
	 * @var string
	 */
	public const string BOOLEAN_ARRAY = 'bool[]';

	/**
	 * Represents a `nullable boolean array` type.
	 * @var string
	 */
	public const string NULLABLE_BOOLEAN_ARRAY = '?bool[]';

	/**
	 * Represents a `boolean` type.
	 * @var string
	 */
	public const string INTEGER = 'int';

	/**
	 * Represents a `nullable boolean` type.
	 * @var string
	 */
	public const string NULLABLE_INTEGER = '?int';

	/**
	 * Represents a `float` type.
	 * @var string
	 */
	public const string FLOAT = 'float';

	/**
	 * Represents a `nullable float` type.
	 * @var string
	 */
	public const string NULLABLE_FLOAT = '?float';

	/**
	 * Represents a `string` type.
	 * @var string
	 */
	public const string STRING = 'string';

	/**
	 * Represents a `nullable string` type.
	 * @var string
	 */
	public const string NULLABLE_STRING = '?string';

	/**
	 * Represents a `DateTimeImmutable` type.
	 * @var string
	 */
	public const string DATE_TIME_IMMUTABLE = 'DateTimeImmutable';

	/**
	 * Represents a `nullable DateTimeImmutable` type.
	 * @var string
	 */
	public const string NULLABLE_DATE_TIME_IMMUTABLE = '?DateTimeImmutable';

	/**
	 * Represents a `DateTime` type.
	 * @var string
	 */
	public const string DATE_TIME = 'DateTime';

	/**
	 * Represents a `nullable DateTime` type.
	 * @var string
	 */
	public const string NULLABLE_DATE_TIME = '?DateTime';
}
