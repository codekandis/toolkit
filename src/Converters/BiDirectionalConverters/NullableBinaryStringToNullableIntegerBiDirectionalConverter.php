<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableBinaryStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerToNullableBinaryStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a bidirectional converter converting a `nullable binary string` value matching the regular expression {@link ValidValues::$regExBinaryString} into its corresponding `nullable integer` value - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBinaryStringToNullableIntegerBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBinaryStringToNullableIntegerBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
			new NullableIntegerToNullableBinaryStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convertTo( mixed $value ): ?int
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?string
	{
		return parent::convertFrom( $value );
	}
}
