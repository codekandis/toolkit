<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `array` containing only elements of type `string` equalling exactly one element of {@link ValidValues::$booleanIntegerStringSet}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsBooleanIntegerStringArrayValidator extends BaseObject implements IsBooleanIntegerStringArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsArrayValidator()->validate( $value )
		)
		{
			return false;
		}

		$elementValidator = new IsBooleanIntegerStringValidator();

		foreach ( $value as $element )
		{
			if (
				false === $elementValidator->validate( $element )
			)
			{
				return false;
			}
		}

		return true;
	}
}
