<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;
use function is_subclass_of;

/**
 * Represents a validator validating if a specific value is of type `string` or `object` representing a subclass of a specific interface or class.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsSubClassOfValidator extends AbstractInterfaceOrClassNameRelatedValidator implements IsSubClassOfValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return (
				   new IsInterfaceOrClassNameValidator()
					   ->validate( $value )
				   || new IsObjectValidator()
					   ->validate( $value )
			   )
			   && is_subclass_of( $value, $this->interfaceOrClassName );
	}
}
