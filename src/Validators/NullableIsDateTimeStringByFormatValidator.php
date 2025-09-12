<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is a `nullable string` representing a `DateTime` matching a specific format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsDateTimeStringByFormatValidator extends AbstractDateTimeFormatRelatedValidator implements NullableIsDateTimeStringByFormatValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsDateTimeStringByFormatValidator( $this->format )->validate( $value );
	}
}
