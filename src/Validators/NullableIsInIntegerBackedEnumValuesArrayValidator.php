<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\IntegerBackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable array` containing only elements of type `integer` representing a value of a specific `integer backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInIntegerBackedEnumValuesArrayValidator extends AbstractIntegerBackedEnumNameRelatedValidator implements NullableIsInIntegerBackedEnumValuesArrayValidatorInterface
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
				   || new IsInIntegerBackedEnumValuesArrayValidator( $this->integerBackedEnumName )->validate( $value );
		}
		catch ( IntegerBackedEnumNotFoundExceptionInterface $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}
	}
}
