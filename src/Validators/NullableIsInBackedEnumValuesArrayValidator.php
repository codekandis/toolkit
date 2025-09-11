<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `integer` or `string` representing a value of a specific `backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInBackedEnumValuesArrayValidator extends AbstractBackedEnumNameRelatedValidator implements NullableIsInBackedEnumValuesArrayValidatorInterface
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
		return new IsInBackedEnumValuesArrayValidator( $this->backedEnumName )->validate( $value );
	}
}
