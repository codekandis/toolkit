<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatStringToNullableFloatUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableFloatToNullableFloatStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a bidirectional converter converting a `nullable float string` value matching the regular expression {@link ValidValues::$regExFloatString} into its corresponding `nullable float` value - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableFloatStringToNullableFloatBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableFloatStringToNullableFloatBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableFloatStringToNullableFloatUniDirectionalConverter(),
			new NullableFloatToNullableFloatStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convertTo( mixed $value ): ?float
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
