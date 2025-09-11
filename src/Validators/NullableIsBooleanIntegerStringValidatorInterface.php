<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents the interface of any validator validating if a specific value is of type `nullable string` and equals exactly one element of {@link ValidValues::$booleanIntegerStringSet}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIsBooleanIntegerStringValidatorInterface extends ValidatorInterface
{
	/**
	 * Validates if a specific value is of type `nullable string` and equals exactly one element of {@link ValidValues::$booleanIntegerStringSet}.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
