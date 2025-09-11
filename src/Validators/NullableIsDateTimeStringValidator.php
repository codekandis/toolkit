<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable string` representing a `DateTime`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsDateTimeStringValidator extends BaseObject implements NullableIsDateTimeStringValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsDateTimeStringValidator()->validate( $value );
	}
}
