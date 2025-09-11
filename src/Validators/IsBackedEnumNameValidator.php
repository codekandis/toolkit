<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;
use ReflectionEnum;
use ReflectionException;

/**
 * Represents a validator validating if a specific value is of type `string` representing a valid `backed enum` name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsBackedEnumNameValidator extends BaseObject implements IsBackedEnumNameValidatorInterface
{
	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
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

		try
		{
			$reflectedEnum = new ReflectionEnum( $value );
		}
		catch ( ReflectionException $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}

		return new ValidValues()->null !== $reflectedEnum->getBackingType();
	}
}
