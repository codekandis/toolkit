<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\Types\LogicException;
use Throwable;
use function sprintf;

/**
 * Represents an exception if a validator mapping already exists.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DuplicateValidatorMappingException extends LogicException implements DuplicateValidatorMappingExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The validator mapping already exists.';

	/**
	 * Represents the exception message with the duplicate key.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY = 'The validator mapping with the key `%1$s` already exists.';

	/**
	 * Static constructor method.
	 * @param int|string $duplicateKey The key that already exists.
	 * @param int $code The error code of the exception.
	 * * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withDuplicateKey( int | string $duplicateKey, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY, $duplicateKey ),
			$code,
			$previous
		);
	}
}
