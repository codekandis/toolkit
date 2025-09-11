<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `array` containing only elements of type `integer` or `string` representing a value of a specific `backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInBackedEnumValuesArrayValidator extends AbstractBackedEnumNameRelatedValidator implements IsInBackedEnumValuesArrayValidatorInterface
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

		/** @noinspection PhpUnhandledExceptionInspection */
		$elementValidator = new IsInBackedEnumValuesValidator( $this->backedEnumName );

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
