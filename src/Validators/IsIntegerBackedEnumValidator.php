<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\TypeHintTypes;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;
use ReflectionEnum;
use ReflectionException;

/**
 * Represents a validator validating if a specific value is of type `integer backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsIntegerBackedEnumValidator extends BaseObject implements IsIntegerBackedEnumValidatorInterface
{
	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		try
		{
			return new IsBackedEnumValidator()->validate( $value )
				   && new TypeHintTypes()->integer === new ReflectionEnum( $value )->getBackingType()->getName();
		}
		catch ( ReflectionException $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}
	}
}
