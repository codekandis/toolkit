<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Converters\BiDirectionalConverters;

use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\UniDirectionalConverters\NullableIntegerToNullableIntegerStringUniDirectionalConverter;
use CodeKandis\ToolKit\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a bidirectional converter converting a `nullable integer string` value matching the regular expression {@link ValidValues::$regExIntegerString} into its corresponding `nullable integer` value - and vice versa.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerStringToNullableIntegerBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableIntegerStringToNullableIntegerBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
			new NullableIntegerToNullableIntegerStringUniDirectionalConverter()
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
