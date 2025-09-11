<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a valid `string backed enum` name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsStringBackedEnumNameArrayValidator extends BaseObject implements NullableIsStringBackedEnumNameArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsStringBackedEnumNameArrayValidator()->validate( $value );
	}
}
