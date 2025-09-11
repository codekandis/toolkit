<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents the interface of any validator validating if a specific value is of type `nullable integer` or `nullable string` representing a value of a specific `backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIsInBackedEnumValuesValidatorInterface extends BackedEnumNameRelatedValidatorInterface
{
	/**
	 * Validates if a specific value is of type `nullable integer` or `nullable string` representing a value of a specific `backed enum`.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
