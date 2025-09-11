<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\UniDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use DateTimeImmutable;
use Override;

/**
 * Represents a unidirectional converter converting a `DateTimeImmutable` value into its corresponding `DateTime string` value depending on a given format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeImmutableToDateTimeStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeImmutableToDateTimeStringUniDirectionalConverterInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === new IsInstanceOfValidator( DateTimeImmutable::class )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, $this->expectedTypes->dateTimeImmutable );
		}

		return $value->format( $this->format );
	}
}
