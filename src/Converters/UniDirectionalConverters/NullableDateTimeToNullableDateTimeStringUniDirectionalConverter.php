<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use DateTime;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable DateTime` value into its corresponding `nullable DateTime string` value depending on a given format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeToNullableDateTimeStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeToNullableDateTimeStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if (
			true === new IsNullValidator()
				->validate( $value )
		)
		{
			return $this->validValues->null;
		}

		if (
			false === new IsInstanceOfValidator( DateTime::class )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->nullableDateTime );
		}

		return $value->format( $this->format );
	}
}
