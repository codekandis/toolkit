<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;
use function trait_exists;

/**
 * Represents a validator validating if a specific value is of type `string` representing a valid trait name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsTraitNameValidator extends BaseObject implements IsTraitNameValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsStringValidator()
				   ->validate( $value )
			   && trait_exists( $value, true );
	}
}
