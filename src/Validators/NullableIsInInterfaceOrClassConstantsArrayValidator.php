<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements representing any constant of a specific interface or class.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInInterfaceOrClassConstantsArrayValidator extends AbstractInterfaceOrClassNameRelatedValidator implements NullableIsInInterfaceOrClassConstantsArrayValidatorInterface
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
		return new IsInInterfaceOrClassConstantsArrayValidator( $this->interfaceOrClassName )->validate( $value );
	}
}
