<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use DateTime;
use Override;

/**
 * Represents a validator validating if a specific value is of type `DateTime`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateTimeValidator extends BaseObject implements IsDateTimeValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsInstanceOfValidator( DateTime::class )->validate( $value );
	}
}
