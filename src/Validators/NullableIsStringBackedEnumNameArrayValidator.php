<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
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
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsStringBackedEnumNameArrayValidator()->validate( $value );
	}
}
