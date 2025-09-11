<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `object` or `enum` representing an instance of a specific interface, class or enum.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInstanceOfValidator extends AbstractInterfaceClassOrEnumNameRelatedValidator implements IsInstanceOfValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return (
				   new IsEnumValidator()
					   ->validate( $value )
				   || new IsObjectValidator()
					   ->validate( $value )
			   )
			   && $value instanceof $this->interfaceClassOrEnumName;
	}
}
