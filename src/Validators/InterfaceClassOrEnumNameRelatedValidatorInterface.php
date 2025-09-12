<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any interface, class or enum name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InterfaceClassOrEnumNameRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the interface, class or enum name.
	 * @var string
	 */
	public string $interfaceClassOrEnumName {
		get;
	}
}
