<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullStringToNullUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullToNullStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use Override;

/**
 * Represents a bidirectional converter converting a null value into a value equal to {@link ValidValues::$null} into a `string` value equal to {@link ValidValues::$nullString} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullToNullStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullToNullStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullToNullStringUniDirectionalConverter(),
			new NullStringToNullUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): null
	{
		return parent::convertFrom( $value );
	}
}
