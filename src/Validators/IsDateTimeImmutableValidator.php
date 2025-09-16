<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use DateTimeImmutable;
use Override;

/**
 * Represents a validator validating if a specific value is of type `DateTimeImmutable`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateTimeImmutableValidator extends BaseObject implements IsDateTimeImmutableValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsInstanceOfValidator( DateTimeImmutable::class )->validate( $value );
	}
}
