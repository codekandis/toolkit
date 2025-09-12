<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any `DateTime` format related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeFormatRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the `DateTime` format.
	 * @var string
	 */
	public string $format {
		get;
	}
}
