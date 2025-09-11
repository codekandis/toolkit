<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionExceptionInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\Types\OffsetOutOfRangeExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a validator validating if a specific value is of type `string` matching a specific regular expression.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsMatchingRegularExpressionValidator extends AbstractRegularExpressionRelatedValidator implements IsMatchingRegularExpressionValidatorInterface
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
			return new IsStringValidator()->validate( $value )
				   && null !== new RegularExpression( $this->regularExpression )->match( $value );
		}
		catch ( InvalidRegularExpressionExceptionInterface | OffsetOutOfRangeExceptionInterface $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}
	}
}
