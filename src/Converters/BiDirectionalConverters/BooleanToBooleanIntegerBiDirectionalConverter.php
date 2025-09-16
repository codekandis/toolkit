<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanIntegerToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use Override;

/**
 * Represents a bidirectional converter converting a `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `boolean integer` value equal to {@link ValidValues::$booleanIntegerFalse} or {@link ValidValues::$booleanIntegerTrue} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanToBooleanIntegerBiDirectionalConverter extends AbstractBiDirectionalConverter implements BooleanToBooleanIntegerBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BooleanToBooleanIntegerUniDirectionalConverter(),
			new BooleanIntegerToBooleanUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): int
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): bool
	{
		return parent::convertFrom( $value );
	}
}
