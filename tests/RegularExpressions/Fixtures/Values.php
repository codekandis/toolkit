<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures;

use Exception;
use Throwable;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents a valid simple regular expression.
	 * @var string
	 */
	public const string SIMPLE_REGULAR_EXPRESSION = '~^[0-9]+$~';

	/**
	 * Represents a valid simple grouped regular expression.
	 * @var string
	 */
	public const string SIMPLE_GROUPED_REGULAR_EXPRESSION = '~^([0-9]+)$~';

	/**
	 * Represents an invalid simple grouped regular expression.
	 * @var string
	 */
	public const string INVALID_SIMPLE_GROUPED_REGULAR_EXPRESSION = '~$([0-9^~';

	/**
	 * Represents a valid repeated regular expression.
	 * @var string
	 */
	public const string REPEATED_GROUPED_REGULAR_EXPRESSION = '~([a-z]+\([0-9]+\))+~';

	/**
	 * Represents a valid simple subject.
	 * @var string
	 */
	public const string SIMPLE_SUBJECT = '0123456789';

	/**
	 * Represents a valid simple subject length.
	 * @var int
	 */
	public const int SIMPLE_SUBJECT_LENGTH = 10;

	/**
	 * Represents a valid simple nonmatching subject.
	 * @var string
	 */
	public const string SIMPLE_NONMATCHING_SUBJECT = 'foobar';

	/**
	 * Represents a valid repeated subject.
	 * @var string
	 */
	public const string REPEATED_SUBJECT = 'foo(0123456789)0123456789bar(9876543210)';

	/**
	 * Represents a valid simple replacement.
	 * @var string
	 */
	public const string SIMPLE_REPLACEMENT = '-replaced0123498765-';

	/**
	 * Represents a replaced string.
	 * @var string
	 */
	public const string MATCH_STRING_1 = '0123456789';

	/**
	 * Represents a replaced string.
	 * @var string
	 */
	public const string MATCH_STRING_2 = 'foo(0123456789)';

	/**
	 * Represents a replaced string.
	 * @var string
	 */
	public const string MATCH_STRING_3 = 'bar(9876543210)';

	/**
	 * Represents a match result.
	 * @var string[]
	 */
	public const array MATCH_RESULT_1 = [
		self::MATCH_STRING_1
	];

	/**
	 * Represents a match result.
	 * @var string[]
	 */
	public const array MATCH_RESULT_2 = [
		self::MATCH_STRING_1,
		self::MATCH_STRING_1
	];

	/**
	 * Represents a match result.
	 * @var string[]
	 */
	public const array MATCH_RESULT_3 = [
		self::MATCH_STRING_2,
		self::MATCH_STRING_2
	];

	/**
	 * Represents a match all result.
	 * @var string[][]
	 */
	public const array MATCH_ALL_RESULT_1 = [
		[
			self::MATCH_STRING_1
		],
	];

	/**
	 * Represents a match all result.
	 * @var string[][]
	 */
	public const array MATCH_ALL_RESULT_2 = [
		[
			self::MATCH_STRING_2,
			self::MATCH_STRING_3
		],
		[
			self::MATCH_STRING_2,
			self::MATCH_STRING_3
		],
	];

	/**
	 * Represents a replace result.
	 * @var string
	 */
	public const string REPLACE_RESULT_1 = '-replaced0123498765-0123456789-replaced0123498765-';

	/**
	 * Represents a replace result.
	 * @var string
	 */
	public const string REPLACE_RESULT_2 = 'foo(0123456789)0123456789bar(9876543210)';

	/**
	 * Represents a replace result.
	 * @var string
	 */
	public const string REPLACE_RESULT_3 = '-replaced0123498765-0123456789bar(9876543210)';

	/**
	 * Represents an offset.
	 * @var int
	 */
	public const int OFFSET = 0;

	/**
	 * Represents an invalid offset.
	 * @var int
	 */
	public const int INVALID_OFFSET = 11;

	/**
	 * Represents a limit.
	 * @var int
	 */
	public const int LIMIT_MINUS_1 = -1;

	/**
	 * Represents a limit.
	 * @var int
	 */
	public const int LIMIT_0 = 0;

	/**
	 * Represents a limit.
	 * @var int
	 */
	public const int LIMIT_1 = 1;

	/**
	 * Represents a limit.
	 * @var int
	 */
	public const int LIMIT_2 = 2;

	/**
	 * Represents a limit.
	 * @var int
	 */
	public const int LIMIT_3 = 3;

	/**
	 * Represents an invalid limit.
	 * @var int
	 */
	public const int INVALID_LIMIT = -2;

	/**
	 * Represents a replaced count.
	 * @var int
	 */
	public const int REPLACED_COUNT_0 = 0;

	/**
	 * Represents a replaced count.
	 * @var int
	 */
	public const int REPLACED_COUNT_1 = 1;

	/**
	 * Represents a replaced count.
	 * @var int
	 */
	public const int REPLACED_COUNT_2 = 2;

	/**
	 * Represents a throwable code.
	 * @var int
	 */
	public const int THROWABLE_CODE = 42;

	/**
	 * Represents a throwable code default.
	 * @var int
	 */
	public const int THROWABLE_CODE_DEFAULT = 0;

	/**
	 * Represents a throwable previous default.
	 * @var ?Throwable
	 */
	public const ?Throwable THROWABLE_PREVIOUS_DEFAULT = null;

	/**
	 * Creates a throwable.
	 * @return Throwable The created throwable.
	 */
	public static function createThrowable(): Throwable
	{
		return new Exception();
	}
}
