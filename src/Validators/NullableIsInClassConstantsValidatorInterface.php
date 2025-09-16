<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents the interface of any validator validating if a specific value is `nullable` and representing any constant of a specific class.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIsInClassConstantsValidatorInterface extends ClassNameRelatedValidatorInterface
{
	/**
	 * Validates if a specific value is of type `nullable` and representing any constant of a specific class.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
