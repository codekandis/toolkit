<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;
use function in_array;

/**
 * Represents a validator validating if a specific value is a specific value is an element of a specific array.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInArrayValidator extends AbstractArrayRelatedValidator implements IsInArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return in_array( $value, $this->array, true );
	}
}
