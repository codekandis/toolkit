<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a validator validating if a specific value is of type `nullable integer` or `nullable string` representing a value of a specific `backed enum`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIsInBackedEnumValuesValidator extends AbstractBackedEnumNameRelatedValidator implements NullableIsInBackedEnumValuesValidatorInterface
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
				   || new IsInBackedEnumValuesValidator( $this->backedEnumName )->validate( $value );
		}
		catch ( BackedEnumNotFoundExceptionInterface $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}
	}
}
