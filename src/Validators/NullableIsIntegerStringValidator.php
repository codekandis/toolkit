<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable string` matching the regular expression {@link ValidValues::$regExIntegerString}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsIntegerStringValidator extends BaseObject implements NullableIsIntegerStringValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsNullValidator()->validate( $value )
			   || new IsIntegerStringValidator()->validate( $value );
	}
}
