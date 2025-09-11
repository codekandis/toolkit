<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\InterfaceClassOrEnumNotFoundExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements representing an instance of a specific interface, class or enum.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInstanceOfArrayValidator extends AbstractInterfaceClassOrEnumNameRelatedValidator implements NullableIsInstanceOfArrayValidatorInterface
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
			return new IsNullValidator()->validate( $value )
				   || new IsInstanceOfArrayValidator( $this->interfaceClassOrEnumName )->validate( $value );
		}
		catch ( InterfaceClassOrEnumNotFoundExceptionInterface $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}
	}
}
