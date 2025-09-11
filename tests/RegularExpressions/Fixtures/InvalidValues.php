<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures;

/**
 * Represents an enumeration of invalid values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class InvalidValues
{
	/**
	 * Represents an invalid simple grouped regular expression.
	 */
	public const string SIMPLE_GROUPED_REGULAR_EXPRESSION = '~$([0-9^~';

	/**
	 * Represents an invalid offset.
	 */
	public const int OFFSET = 11;
}
