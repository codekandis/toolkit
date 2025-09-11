<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects;

use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;

/**
 * Represents an object of mapped properties.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class MappedObjectFixture2
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
	 * Represents a `boolean` representing the value `false`.
	 * @var bool
	 */
	public bool $key2 = Values::BOOLEAN_FALSE;
}
