<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents the interface of any validator validating if a specific value is of type `nullable array` containing only elements of type `string` containing the literal string `null`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIsNullStringArrayValidatorInterface extends ValidatorInterface
{
	/**
	 * Validates if a specific value is of type `nullable array` containing only elements of type `string` containing the literal string `null`.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
