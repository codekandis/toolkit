<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\InterfaceNotFoundExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable` and representing any constant of a specific interface.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInInterfaceConstantsValidator extends AbstractInterfaceNameRelatedValidator implements NullableIsInInterfaceConstantsValidatorInterface
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
				   || new IsInInterfaceConstantsValidator( $this->interfaceName )->validate( $value );
		}
		catch ( InterfaceNotFoundExceptionInterface $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}
	}
}
