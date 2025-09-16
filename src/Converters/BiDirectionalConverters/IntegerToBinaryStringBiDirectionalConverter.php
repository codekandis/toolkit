<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BinaryStringToIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\IntegerToBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a bidirectional converter converting an `integer` value into its corresponding `binary string` value matching the regular expression {@link ValidValues::$regExBinaryString} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerToBinaryStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements IntegerToBinaryStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new IntegerToBinaryStringUniDirectionalConverter(),
			new BinaryStringToIntegerUniDirectionalConverter()
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
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convertFrom( mixed $value ): int
	{
		return parent::convertFrom( $value );
	}
}
