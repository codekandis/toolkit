<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use DateMalformedStringException;
use DateTimeImmutable;
use DateTimeZone;
use Override;
use function in_array;
use function strtolower;

/**
 * Represents a validator validating if a specific value is of type `string` representing a `DateTime`.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateTimeStringValidator extends BaseObject implements IsDateTimeStringValidatorInterface
{
	/**
	 * Stores the available time zone identifiers.
	 * @var string[]
	 */
	private array $timeZoneIdentifiers;

	/**
	 * Gets the available time zone identifiers.
	 * @return string[] The available time zone identifiers.
	 */
	private function getTimeZoneIdentifiers(): array
	{
		if (
			false === isset( $this->timeZoneIdentifiers )
		)
		{
			$this->timeZoneIdentifiers = [];
			foreach ( DateTimeZone::listIdentifiers() as $dateTimeZoneIdentifier )
			{
				$this->timeZoneIdentifiers[] = false === str_contains( $dateTimeZoneIdentifier, '/' )
					? strtolower( $dateTimeZoneIdentifier )
					: $dateTimeZoneIdentifier;
			}
		}

		return $this->timeZoneIdentifiers;
	}

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

		$timeZoneIdentifier = false === str_contains( $value, '/' )
			? strtolower( $value )
			: $value;
		if (
			true === in_array(
				$timeZoneIdentifier,
				$this->getTimeZoneIdentifiers(),
				true
			)
		)
		{
			return false;
		}

		try
		{
			new DateTimeImmutable( $value );

			return true;
		}
		catch ( DateMalformedStringException )
		{
			return false;
		}
	}
}
