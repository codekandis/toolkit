<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable integer` representing a value of a specific `integer backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInIntegerBackedEnumValuesValidator extends AbstractIntegerBackedEnumNameRelatedValidator implements NullableIsInIntegerBackedEnumValuesValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			true === new IsNullValidator()
				->validate( $value )
		)
		{
			return true;
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		return new IsInIntegerBackedEnumValuesValidator( $this->integerBackedEnumName )->validate( $value );
	}
}
