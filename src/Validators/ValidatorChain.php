<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator chain validating a specific value with a list of validators.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorChain extends AbstractValidatorsRelatedValidator implements ValidatorChainInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		foreach ( $this->elements as $validator )
		{
			$isValid = $validator->validate( $value );
			if ( false === $isValid )
			{
				return false;
			}
		}

		return true;
	}
}
