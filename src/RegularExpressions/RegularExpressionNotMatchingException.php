<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\Types\LogicException;
use Throwable;
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
	public const string EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION = 'The regular expression `%1$s` does not match.';

	/**
	 * Static constructor method.
	 * @param string $regularExpression The nonmatching regular expression.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonMatchingRegularExpression( string $regularExpression, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $regularExpression ),
			$code,
			$previous
		);
	}
}
