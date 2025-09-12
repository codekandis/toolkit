<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\ToolKit\Validators\IsArrayValidator;
use Override;
use function array_key_exists;

/**
 * Represents a mapped array validator validating if a specific value is of type `array` and validates its elements based on a set of specific validator mappings.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class MappedArrayValidator extends AbstractValidatorMappingsRelatedValidator implements MappedArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsArrayValidator()->validate( $value )
		)
		{
			return false;
		}

		foreach ( $this->validatorMappings as $validatorMapping )
		{
			$key     = $validatorMapping->key;
			$isValid = array_key_exists( $key, $value )
					   && $validatorMapping->validator->validate( $value[ $key ] );

			if ( false === $isValid )
			{
				return false;
			}
		}

		return true;
	}
}
