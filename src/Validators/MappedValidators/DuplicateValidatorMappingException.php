<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\Types\LogicException;
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
	public const string EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY = 'The validator mapping with the key `%s` already exists.';

	/**
	 * Static constructor method.
	 * @param int|string $duplicateKey The key that already exists.
	 * @return static
	 */
	public static function withDuplicateKey( int | string $duplicateKey ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY, $duplicateKey )
		);
	}
}
