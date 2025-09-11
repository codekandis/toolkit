<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents the interface of any validator validating if a specific value is of type `array` containing only elements of type `string` representing a value of a specific `string backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IsInStringBackedEnumValuesArrayValidatorInterface extends StringBackedEnumNameRelatedValidatorInterface
{
	/**
	 * Validates if a specific value is of type `array` containing only elements of type `string` representing a value of a specific `string backed enum`.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
