<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `array` containing only elements of type `string` containing the literal string `null`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsNullStringArrayValidator extends BaseObject implements IsNullStringArrayValidatorInterface
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

		$elementValidator = new IsNullStringValidator();

		foreach ( $value as $valueFetched )
		{
			if (
				false === $elementValidator->validate( $valueFetched )
			)
			{
				return false;
			}
		}

		return true;
	}
}
