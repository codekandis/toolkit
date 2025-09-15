<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\ToolKit\Converters\DateTimeRelatedConverterInterface;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\UniDirectionalConverterInterface;
use DateTimeZone;

/**
 * Represents the base class of any `DateTime` related bidirectional converter.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractDateTimeRelatedBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements BiDirectionalConverterInterface, DateTimeRelatedConverterInterface
{
	use AbstractBiDirectionalConverterTrait;

	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 * @param UniDirectionalConverterInterface $converterTo The unidirectional converter used to convert into a value.
	 * @param UniDirectionalConverterInterface $converterFrom The unidirectional converter used to convert from a value.
	 */
	public function __construct( string $format, ?DateTimeZone $timeZone, UniDirectionalConverterInterface $converterTo, UniDirectionalConverterInterface $converterFrom )
	{
		parent::__construct( $format, $timeZone );

		$this->converterTo   = $converterTo;
		$this->converterFrom = $converterFrom;
	}
}
