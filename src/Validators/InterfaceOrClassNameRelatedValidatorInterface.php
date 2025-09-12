<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any interface or class name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InterfaceOrClassNameRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the interface or class name.
	 * @var string
	 */
	public string $interfaceOrClassName {
		get;
	}
}
