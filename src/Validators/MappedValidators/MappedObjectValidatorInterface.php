<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use Override;

/**
 * Represents the interface of any mapped array validator validating if a specific value is of type `object` and validates its public properties based on a set of specific validator mappings.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface MappedObjectValidatorInterface extends ValidatorMappingsRelatedValidatorInterface
{
	/**
	 * Validates if a specific value is of type `object` and validates its public properties based on a set of specific validator mappings.
	 * @param object $value The value to validate.
	 * @return bool `true` if the value is valid, otherwise `false`.
	 */
	#[Override]
	public function validate( mixed $value ): bool;
}
