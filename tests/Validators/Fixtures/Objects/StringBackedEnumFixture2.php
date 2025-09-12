<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects;

/**
 * Represents a `string` backed enum fixture.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
enum StringBackedEnumFixture2: string
{
	/**
	 * Represents an enum value.
	 * @var static
	 */
	case Value1 = '42';

	/**
	 * Represents an enum value.
	 * @var static
	 */
	case Value2 = '424';
}
