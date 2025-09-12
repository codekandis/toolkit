<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a bidirectional converter converting a `nullable boolean array` containing only values equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBooleanArrayToNullableBinaryStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
			new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?array
	{
		return parent::convertFrom( $value );
	}
}
