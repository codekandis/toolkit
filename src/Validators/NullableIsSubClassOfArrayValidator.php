<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` or `object` representing a subclass of a specific interface or class.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsSubClassOfArrayValidator extends AbstractInterfaceOrClassNameRelatedValidator implements NullableIsSubClassOfArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			true === new IsNullValidator()
				->validate( $value )
		)
		{
			return true;
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		return new IsSubClassOfArrayValidator( $this->interfaceOrClassName )->validate( $value );
	}
}
