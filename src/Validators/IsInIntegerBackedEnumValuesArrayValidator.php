<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `array` containing only elements of type `integer` representing a value of a specific `integer backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInIntegerBackedEnumValuesArrayValidator extends AbstractIntegerBackedEnumNameRelatedValidator implements IsInIntegerBackedEnumValuesArrayValidatorInterface
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
		$elementValidator = new IsInIntegerBackedEnumValuesValidator( $this->integerBackedEnumName );

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
