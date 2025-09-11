<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\Types\LogicExceptionInterface;

/**
 * Represents the interface of any exception if a regular expression does not match.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RegularExpressionNotMatchingExceptionInterface extends LogicExceptionInterface
{
}
