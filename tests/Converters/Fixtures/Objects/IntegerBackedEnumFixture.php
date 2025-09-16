<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects;

/**
 * Represents a `integer` backed enum fixture.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
enum IntegerBackedEnumFixture: int
{
	/**
	 * Represents the first case.
	 * @var static
	 */
	case FirstCaseInteger = 0;

	/**
	 * Represents the second case.
	 * @var static
	 */
	case SecondCaseInteger = 1;

	/**
	 * Represents the third case.
	 * @var static
	 */
	case ThirdCaseInteger = 2;

	/**
	 * Represents the fourth case.
	 * @var static
	 */
	case FourthCaseInteger = 3;

	/**
	 * Represents the fifth case.
	 * @var static
	 */
	case FifthCaseInteger = 4;
}
