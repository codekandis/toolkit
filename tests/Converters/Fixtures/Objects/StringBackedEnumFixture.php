<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Converters\Fixtures\Objects;

/**
 * Represents a `string` backed enum fixture.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
enum StringBackedEnumFixture: string
{
	/**
	 * Represents the first case.
	 * @var static
	 */
	case FirstCaseString = '0';

	/**
	 * Represents the second case.
	 * @var static
	 */
	case SecondCaseString = '1';

	/**
	 * Represents the third case.
	 * @var static
	 */
	case ThirdCaseString = '2';

	/**
	 * Represents the fourth case.
	 * @var static
	 */
	case FourthCaseString = '3';

	/**
	 * Represents the fifth case.
	 * @var static
	 */
	case FifthCaseString = '4';
}
