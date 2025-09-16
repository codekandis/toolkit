<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any array related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ArrayRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the array.
	 * @var array
	 */
	public array $array {
		get;
	}
}
