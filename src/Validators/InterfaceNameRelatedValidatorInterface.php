<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any interface name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InterfaceNameRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the interface name.
	 * @var string
	 */
	public string $interfaceName {
		get;
	}
}
