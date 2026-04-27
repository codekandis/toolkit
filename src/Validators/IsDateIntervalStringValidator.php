<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use DateInterval;
use DateMalformedIntervalStringException;
use Override;

/**
 * Represents a validator validating if a specific value is of type `string` representing a `DateInterval`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateIntervalStringValidator extends BaseObject implements IsDateIntervalStringValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsStringValidator()->validate( $value )
		)
		{
			return false;
		}

		try
		{
			new DateInterval( $value );

			return true;
		}
		catch ( DateMalformedIntervalStringException )
		{
			return false;
		}
	}
}
