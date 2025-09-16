<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any exception if a regular expression is invalid.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidRegularExpressionExceptionInterface extends InvalidValueExceptionInterface
{
}
