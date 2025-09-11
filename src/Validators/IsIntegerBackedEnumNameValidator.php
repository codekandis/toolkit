<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\TypeHintTypes;
use Override;
use ReflectionEnum;

/**
 * Represents a validator validating if a specific value is of type `string` representing a valid `integer backed enum` name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsIntegerBackedEnumNameValidator extends BaseObject implements IsIntegerBackedEnumNameValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsEnumNameValidator()->validate( $value )
		)
		{
			return false;
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		$reflectedEnum = new ReflectionEnum( $value );

		return new ValidValues()->null !== $reflectedEnum->getBackingType()
			   && new TypeHintTypes()->integer === $reflectedEnum->getBackingType()->getName();
	}
}
