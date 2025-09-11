<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any backed enum name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BackedEnumNameRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the backed enum name.
	 * @var string
	 */
	public string $backedEnumName {
		get;
	}
}
