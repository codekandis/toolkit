<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidatorInterface
{
	/**
	 * Validates a specific value.
	 * @param mixed $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	public function validate( mixed $value ): bool;
}
