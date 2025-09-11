<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable string` or `nullable object` representing an instance of a specific interface or class.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsSubClassOfValidator extends AbstractInterfaceOrClassNameRelatedValidator implements NullableIsSubClassOfValidatorInterface
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
		return new IsSubClassOfValidator( $this->interfaceOrClassName )->validate( $value );
	}
}
