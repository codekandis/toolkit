<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use DateTime;
use Override;

/**
 * Represents a unidirectional converter converting a `DateTime` value into its corresponding `DateTime string` value depending on a given format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeToDateTimeStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeToDateTimeStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === new IsInstanceOfValidator( DateTime::class )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->dateTime );
		}

		return $value->format( $this->format );
	}
}
