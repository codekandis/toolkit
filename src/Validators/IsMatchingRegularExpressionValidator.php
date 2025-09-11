<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
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
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsStringValidator()
				->validate( $value )
		)
		{
			return false;
		}

		/** @noinspection PhpUnhandledExceptionInspection */
		return null !== new RegularExpression( $this->regularExpression )->match( $value );
	}
}
