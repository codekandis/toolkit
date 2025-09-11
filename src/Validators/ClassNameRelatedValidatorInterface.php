<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any class name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ClassNameRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the class name.
	 * @var string
	 */
	public string $className {
		get;
	}
}
