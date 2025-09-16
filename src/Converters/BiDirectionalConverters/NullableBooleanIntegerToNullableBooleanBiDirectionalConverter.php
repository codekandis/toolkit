<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanIntegerToNullableBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use Override;

/**
 * Represents a bidirectional converter converting a `nullable boolean integer` value equal to {@link ValidValues::$booleanIntegerFalse} or {@link ValidValues::$booleanIntegerTrue} into its corresponding `nullable boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerToNullableBooleanBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
			new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?bool
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?int
	{
		return parent::convertFrom( $value );
	}
}
