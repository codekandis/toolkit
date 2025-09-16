<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

/**
 * Represents the interface of any regular expression related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RegularExpressionRelatedValidatorInterface extends ValidatorInterface
{
	/**
	 * Stores the regular expression.
	 * @var string
	 */
	public string $regularExpression {
		get;
	}
}
