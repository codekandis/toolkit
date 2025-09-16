<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\ToolKit\Validators\IsObjectValidator;
use Override;
use ReflectionObject;
use ReflectionProperty;
use function array_filter;
use function array_values;
use function count;

/**
 * Represents a mapped array validator validating if a specific value is of type `object` and validates its public properties based on a set of specific validator mappings.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class MappedObjectValidator extends AbstractValidatorMappingsRelatedValidator implements MappedObjectValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsObjectValidator()->validate( $value )
		)
		{
			return false;
		}

		$reflectedProperties = new ReflectionObject( $value )->getProperties( ReflectionProperty::IS_PUBLIC );

		foreach ( $this->validatorMappings as $validatorMapping )
		{
			$key        = $validatorMapping->key;
			$properties = array_values(
				array_filter(
					$reflectedProperties,
					static fn( ReflectionProperty $reflectedProperty ) => $reflectedProperty->getName() === $key
				)
			);

			$isValid = 0 !== count( $properties )
					   && $validatorMapping->validator->validate(
					$properties[ 0 ]->getValue( $value )
				);

			if ( false === $isValid )
			{
				return false;
			}
		}

		return true;
	}
}
