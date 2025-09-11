<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable DateTime`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsDateTimeValidator extends BaseObject implements NullableIsDateTimeValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsDateTimeValidator()->validate( $value );
	}
}
