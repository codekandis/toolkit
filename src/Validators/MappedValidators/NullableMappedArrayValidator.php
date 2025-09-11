<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\ToolKit\Validators\IsNullValidator;
use Override;

/**
 * Represents a mapped array validator validating if a specific value is of type `nullable array` and validates its elements based on a set of specific validator mappings.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableMappedArrayValidator extends AbstractValidatorMappingsRelatedValidator implements NullableMappedArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new MappedArrayValidator( ...$this->validatorMappings )->validate( $value );
	}
}
