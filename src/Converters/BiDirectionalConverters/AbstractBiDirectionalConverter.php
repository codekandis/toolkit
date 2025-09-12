<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\AbstractConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\UniDirectionalConverterInterface;

/**
 * Represents the base class of any bidirectional converter.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	use AbstractBiDirectionalConverterTrait;

	/**
	 * Constructor method.
	 * @param UniDirectionalConverterInterface $converterTo The unidirectional converter used to convert into a value.
	 * @param UniDirectionalConverterInterface $converterFrom The unidirectional converter used to convert from a value.
	 */
	public function __construct( UniDirectionalConverterInterface $converterTo, UniDirectionalConverterInterface $converterFrom )
	{
		$this->converterTo   = $converterTo;
		$this->converterFrom = $converterFrom;
	}
}
