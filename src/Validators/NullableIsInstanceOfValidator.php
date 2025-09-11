<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable object` representing an instance of a specific interface, class or enum.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInstanceOfValidator extends AbstractInterfaceClassOrEnumNameRelatedValidator implements NullableIsInstanceOfValidatorInterface
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
		return new IsInstanceOfValidator( $this->interfaceClassOrEnumName )->validate( $value );
	}
}
