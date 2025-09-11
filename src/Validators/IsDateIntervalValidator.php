<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use DateInterval;
use Override;

/**
 * Represents a validator validating if a specific value is of type `DateInterval`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateIntervalValidator extends BaseObject implements IsDateIntervalValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsInstanceOfValidator( DateInterval::class )->validate( $value );
	}
}
