<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullStringToNullUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullToNullStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use Override;

/**
 * Represents a bidirectional converter converting a `string` value equal to {@link ValidValues::$nullString} into a value equal to {@link ValidValues::$null} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullStringToNullBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullStringToNullBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullStringToNullUniDirectionalConverter(),
			new NullToNullStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): null
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		return parent::convertFrom( $value );
	}
}
