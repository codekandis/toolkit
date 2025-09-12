<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\UniDirectionalConverterInterface;
use Override;

/**
 * Represents the trait of any bidirectional converter.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
trait AbstractBiDirectionalConverterTrait
{
	/**
	 * Stores the unidirectional converter used to convert into a value.
	 */
	private readonly UniDirectionalConverterInterface $converterTo;

	/**
	 * Stores the unidirectional converter used to convert from a value.
	 */
	private readonly UniDirectionalConverterInterface $converterFrom;

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): mixed
	{
		return $this->converterTo->convert( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): mixed
	{
		return $this->converterFrom->convert( $value );
	}
}
