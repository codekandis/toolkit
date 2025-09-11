<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements representing any constant of a specific interface.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInInterfaceConstantsArrayValidator extends AbstractInterfaceNameRelatedValidator implements NullableIsInInterfaceConstantsArrayValidatorInterface
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
		return new IsInInterfaceConstantsArrayValidator( $this->interfaceName )->validate( $value );
	}
}
