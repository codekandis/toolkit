<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a validator validating if a specific value is of type `array` containing only elements of type `object`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsObjectArrayValidator extends BaseObject implements IsObjectArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsArrayValidator()
				->validate( $value )
		)
		{
			return false;
		}

		$elementValidator = new IsObjectValidator();

		foreach ( $value as $valueFetched )
		{
			if (
				false === $elementValidator
					->validate( $valueFetched )
			)
			{
				return false;
			}
		}

		return true;
	}
}
