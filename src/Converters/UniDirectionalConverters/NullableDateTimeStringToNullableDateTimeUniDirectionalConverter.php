<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use DateTime;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable DateTime string` value into its corresponding `nullable DateTime` value depending on a given format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeStringToNullableDateTimeUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): ?DateTime
	{
		if (
			true === new IsNullValidator()
				->validate( $value )
		)
		{
			return $this->validValues->null;
		}

		if (
			false === new IsStringValidator()
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->nullableString );
		}

		if (
			false === new IsDateTimeStringByFormatValidator( $this->format )
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException(
				$value,
				$this->validValues->createDateTimeString( $this->format )
			);
		}

		return DateTime::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
