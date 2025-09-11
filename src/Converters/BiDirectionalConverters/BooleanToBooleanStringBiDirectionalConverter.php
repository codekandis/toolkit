<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanStringToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a bidirectional converter converting a `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} into its corresponding `boolean string` value matching the regular expression {@link ValidValues::$regExBooleanString} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanToBooleanStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements BooleanToBooleanStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BooleanToBooleanStringUniDirectionalConverter(),
			new BooleanStringToBooleanUniDirectionalConverter()
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
	public function convertFrom( mixed $value ): bool
	{
		return parent::convertFrom( $value );
	}
}
