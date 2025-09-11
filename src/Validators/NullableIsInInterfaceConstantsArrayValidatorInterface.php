<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents the interface of any validator validating if a specific value is of type `nullable array` containing only elements representing any constant of a specific interface.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIsInInterfaceConstantsArrayValidatorInterface extends InterfaceNameRelatedValidatorInterface
{
	/**
	 * Validates if a specific value is of type `nullable array` containing only elements representing any constant of a specific interface.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
