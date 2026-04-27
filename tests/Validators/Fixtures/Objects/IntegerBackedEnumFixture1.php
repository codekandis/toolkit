<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects;

/**
 * Represents an `integer` backed enum fixture.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
enum IntegerBackedEnumFixture1: int
{
	/**
	 * Represents an enum value.
	 * @var static
	 */
	case Value1 = 24;

	/**
	 * Represents an enum value.
	 * @var static
	 */
	case Value2 = 242;
}
