<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `string` and equals exactly one element of {@link ValidValues::$booleanIntegerStringSet}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsBooleanIntegerStringValidator extends BaseObject implements IsBooleanIntegerStringValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsInArrayValidator( new ValidValues()->booleanIntegerStringSet )->validate( $value );
	}
}
