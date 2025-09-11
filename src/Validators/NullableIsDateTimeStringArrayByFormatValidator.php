<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `string` representing a `DateTime` matching a specific format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsDateTimeStringArrayByFormatValidator extends AbstractDateTimeFormatRelatedValidator implements NullableIsDateTimeStringArrayByFormatValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsDateTimeStringArrayByFormatValidator( $this->format )->validate( $value );
	}
}
