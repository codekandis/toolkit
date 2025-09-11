<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\Types\InvalidValueException;
use Throwable;
use function sprintf;

/**
 * Represents an exception if a regular expression is invalid.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidRegularExpressionException extends InvalidValueException implements InvalidRegularExpressionExceptionInterface
{
	/**
	 * Represents the exception message with the invalid regular expression.
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION = 'The regular expression `%1$s` is invalid.';

	/**
	 * Static constructor method.
	 * @param string $invalidRegularExpression The invalid regular expression.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInvalidRegularExpression( string $invalidRegularExpression, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression ),
			$code,
			$previous
		);
	}
}
