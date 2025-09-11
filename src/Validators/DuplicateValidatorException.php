<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\LogicException;
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
	public const string EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME = 'The validator with the class name `%s` already exists.';

	/**
	 * Static constructor method.
	 * @param ValidatorInterface $duplicateValidator The validator that already exists.
	 * @return static
	 */
	public static function withDuplicateValidator( ValidatorInterface $duplicateValidator ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $duplicateValidator::class )
		);
	}
}
