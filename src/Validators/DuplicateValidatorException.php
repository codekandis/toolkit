<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\LogicException;
use Throwable;
use function sprintf;

/**
 * Represents an exception if a validator already exists.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DuplicateValidatorException extends LogicException implements DuplicateValidatorExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The validator already exists.';

	/**
	 * Represents the exception message with the class name of the duplicate validator.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME = 'The validator with the class name `%1$s` already exists.';

	/**
	 * Static constructor method.
	 * @param ValidatorInterface $duplicateValidator The validator that already exists.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withDuplicateValidator( ValidatorInterface $duplicateValidator, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator::class ),
			$code,
			$previous
		);
	}
}
