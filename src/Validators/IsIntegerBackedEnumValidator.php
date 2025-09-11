<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\TypeHintTypes;
use Override;
use ReflectionEnum;

/**
 * Represents a validator validating if a specific value is of type `integer backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsIntegerBackedEnumValidator extends BaseObject implements IsIntegerBackedEnumValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsBackedEnumValidator()
				->validate( $value )
		)
		{
			return false;
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		return new TypeHintTypes()->integer === new ReflectionEnum( $value )->getBackingType()->getName();
	}
}
