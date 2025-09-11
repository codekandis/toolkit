<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `array` containing only elements of type `object` or `enum` representing an instance of a specific interface, class or enum.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInstanceOfArrayValidator extends AbstractInterfaceClassOrEnumNameRelatedValidator implements IsInstanceOfArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsArrayValidator()->validate( $value )
		)
		{
			return false;
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		$elementValidator = new IsInstanceOfValidator( $this->interfaceClassOrEnumName );

		foreach ( $value as $element )
		{
			if (
				false === $elementValidator->validate( $element )
			)
			{
				return false;
			}
		}

		return true;
	}
}
