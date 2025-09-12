<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects;

use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;

/**
 * Represents an object of mapped properties.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class MappedObjectFixture1
{
	/**
	 * Represents the value `null`.
	 * @var null
	 */
	public null $key0 = Values::NULL;

	/**
	 * Represents an array of the value `null`.
	 * @var null[]
	 */
	public array $key1 = Values::NULL_ARRAY;

	/**
	 * Represents a `string` representing the value `null`.
	 * @var string
	 */
	public string $key2 = Values::NULL_STRING;
}
