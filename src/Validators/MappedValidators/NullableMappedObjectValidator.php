<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\ToolKit\Validators\IsNullValidator;
use Override;

/**
 * Represents a mapped array validator validating if a specific value is of type `nullable object` and validates its public properties based on a set of specific validator mappings.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableMappedObjectValidator extends AbstractValidatorMappingsRelatedValidator implements NullableMappedObjectValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new MappedObjectValidator( ...$this->validatorMappings )->validate( $value );
	}
}
