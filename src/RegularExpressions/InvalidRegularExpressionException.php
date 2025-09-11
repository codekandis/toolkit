<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\Types\InvalidValueException;
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
	public const string EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION = 'The regular expression `%s` is invalid.';

	/**
	 * Static constructor method.
	 * @param string $invalidRegularExpression The invalid regular expression.
	 * @return static
	 */
	public static function withInvalidRegularExpression( string $invalidRegularExpression ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
		);
	}
}
