<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\Types\LogicException;
use function sprintf;

/**
 * Represents an exception if a regular expression does not match.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionNotMatchingException extends LogicException implements RegularExpressionNotMatchingExceptionInterface
{
	/**
	 * Represents the exception message with the nonmatching regular expression.
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION = 'The regular expression `%s` does not match.';

	/**
	 * Static constructor method.
	 * @param string $regularExpression The nonmatching regular expression.
	 * @return static
	 */
	public static function withNonMatchingRegularExpression( string $regularExpression ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression )
		);
	}
}
