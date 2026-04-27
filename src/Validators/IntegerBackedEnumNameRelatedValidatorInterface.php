<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any integer backed enum name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntegerBackedEnumNameRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the integer backed enum name.
	 * @var string
	 */
	public string $integerBackedEnumName {
		get;
	}
}
