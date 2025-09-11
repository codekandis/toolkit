<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any string backed enum name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StringBackedEnumNameRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Stores the string backed enum name.
	 * @var string
	 */
	public string $stringBackedEnumName {
		get;
	}
}
