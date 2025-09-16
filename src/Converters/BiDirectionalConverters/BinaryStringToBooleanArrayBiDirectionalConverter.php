<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanArrayToBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a bidirectional converter converting a `binary string` value matching the regular expression {@link ValidValues::$regExBinaryString} into its corresponding `boolean array` containing only values equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToBooleanArrayBiDirectionalConverter extends AbstractBiDirectionalConverter implements BinaryStringToBooleanArrayBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BinaryStringToBooleanArrayUniDirectionalConverter(),
			new BooleanArrayToBinaryStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convertTo( mixed $value ): array
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
