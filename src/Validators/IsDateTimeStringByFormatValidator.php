<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use DateTimeImmutable;
use Override;

/**
 * Represents a validator validating if a specific value is of type `string` representing a `DateTime` matching a specific format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateTimeStringByFormatValidator extends AbstractDateTimeFormatRelatedValidator implements IsDateTimeStringByFormatValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		return new IsStringValidator()->validate( $value )
			   && false !== DateTimeImmutable::createFromFormat( $this->format, $value );
	}
}
