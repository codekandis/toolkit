<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents the interface of any validator validating if a specific value is of type `nullable array` containing only elements representing an instance of a specific interface, class or enum.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIsInstanceOfArrayValidatorInterface extends InterfaceClassOrEnumNameRelatedValidatorInterface
{
	/**
	 * Validates if a specific value is of type `nullable array` containing only elements representing an instance of a specific interface, class or enum.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
