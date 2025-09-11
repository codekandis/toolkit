<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable string` representing a valid interface, class or enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInterfaceClassOrEnumNameValidator extends BaseObject implements NullableIsInterfaceClassOrEnumNameValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsInterfaceClassOrEnumNameValidator()->validate( $value );
	}
}
