<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\Types\LogicException;
use Throwable;
use function sprintf;

/**
 * Represents an exception if a limit is invalid.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidLimitException extends LogicException implements InvalidLimitExceptionInterface
{
	/**
	 * Represents the exception message with the invalid limit.
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_LIMIT = 'The limit `%1$s` is invalid. `-1 <= limit` expected.';

	/**
	 * Static constructor method.
	 * @param int $invalidLimit The invalid limit.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInvalidLimit( int $invalidLimit, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_LIMIT, $invalidLimit ),
			$code,
			$previous
		);
	}
}
