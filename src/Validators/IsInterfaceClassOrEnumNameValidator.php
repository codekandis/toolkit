<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `string` representing a valid interface, class or enum name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInterfaceClassOrEnumNameValidator extends BaseObject implements IsInterfaceClassOrEnumNameValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsStringValidator()->validate( $value )
			   && (
				   new IsInterfaceNameValidator()->validate( $value )
				   || new IsClassNameValidator()->validate( $value )
				   || new IsEnumNameValidator()->validate( $value )
			   );
	}
}
