<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `integer` and equals exactly one element of {@link ValidValues::$booleanIntegerSet}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsBooleanIntegerValidator extends BaseObject implements IsBooleanIntegerValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsInArrayValidator( new ValidValues()->booleanIntegerSet )->validate( $value );
	}
}
