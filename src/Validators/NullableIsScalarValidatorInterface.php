<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents the interface of any validator validating if a specific value is of types `nullable boolean`, `nullable integer`, `nullable float` or `nullable string`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIsScalarValidatorInterface extends ValidatorInterface
{
	/**
	 * Validates if a specific value is of types `nullable boolean`, `nullable integer`, `nullable float` or `nullable string`.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
