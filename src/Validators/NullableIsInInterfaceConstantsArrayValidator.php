<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\InterfaceNotFoundExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements representing any constant of a specific interface.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInInterfaceConstantsArrayValidator extends AbstractInterfaceNameRelatedValidator implements NullableIsInInterfaceConstantsArrayValidatorInterface
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
				   || new IsInInterfaceConstantsArrayValidator( $this->interfaceName )->validate( $value );
		}
		catch ( InterfaceNotFoundExceptionInterface $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}
	}
}
