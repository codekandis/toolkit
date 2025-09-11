<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanIntegerStringToBooleanUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\BooleanToBooleanIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a bidirectional converter converting a `boolean integer string` value matching the regular expression {@link ValidValues::$regExBooleanIntegerString} into its corresponding `boolean` value equal to {@link ValidValues::$booleanFalse} or {@link ValidValues::$booleanTrue} - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanIntegerStringToBooleanBiDirectionalConverter extends AbstractBiDirectionalConverter implements BooleanIntegerStringToBooleanBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BooleanIntegerStringToBooleanUniDirectionalConverter(),
			new BooleanToBooleanIntegerStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convertTo( mixed $value ): bool
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
