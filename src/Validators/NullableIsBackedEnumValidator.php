<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsBackedEnumValidator extends BaseObject implements NullableIsBackedEnumValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsBackedEnumValidator()->validate( $value );
	}
}
