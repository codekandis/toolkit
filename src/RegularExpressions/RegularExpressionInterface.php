<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\RegularExpressions;

use CodeKandis\Types\InvalidOffsetExceptionInterface;

/**
 * Represents the interface of any class wrapping a regular expression with common methods.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RegularExpressionInterface
{
	/**
	 * Searches for the first match in a subject.
	 * @param string $subject The subject to match the regular expression with.
	 * @param int $flags The options of the search.
	 * @param int $offset The offset to start the search from.
	 * @return ?array The list of matches if found, otherwise null.
	 */
	public function match( string $subject, int $flags = RegularExpressionMatchFlag::None->value, int $offset = 0 ): ?array;

	/**
	 * Searches for the first match in a subject.
	 * @param string $subject The subject to match the regular expression with.
	 * @param int $flags The options of the search.
	 * @param int $offset The offset to start the search from.
	 * @return ?array The list of matches if found, otherwise null.
	 * @throws InvalidOffsetExceptionInterface The offset is invalid.
	 * @throws RegularExpressionNotMatchingExceptionInterface The regular expression does not match.
	 */
	public function matchThrowing( string $subject, int $flags = RegularExpressionMatchFlag::None->value, int $offset = 0 ): ?array;

	/**
	 * Searches for all matches in a subject.
	 * @param string $subject The subject to match the regular expression with.
	 * @param int $flags The options of the search.
	 * @param int $offset The offset to start the search from.
	 * @return ?array The list of matches if found, otherwise null.
	 */
	public function matchAll( string $subject, int $flags = RegularExpressionMatchAllFlag::None->value, int $offset = 0 ): ?array;

	/**
	 * Searches for all matches in a subject.
	 * @param string $subject The subject to match the regular expression with.
	 * @param int $flags The options of the search.
	 * @param int $offset The offset to start the search from.
	 * @return ?array The list of matches if found, otherwise null.
	 * @throws InvalidOffsetExceptionInterface The offset is invalid.
	 * @throws RegularExpressionNotMatchingExceptionInterface The regular expression does not match.
	 */
	public function matchAllThrowing( string $subject, int $flags = RegularExpressionMatchAllFlag::None->value, int $offset = 0 ): ?array;

	/**
	 * Replaces the matches in a subject.
	 * @param string $subject The subject to replace its matches.
	 * @param string $replacement The replacement to replace the match with.
	 * @param int $limit The maximum possible replacements, otherwise -1.
	 * @param ?int $replacedCount If specified, stores the amount of replacements done.
	 * @return string The replaced string.
	 */
	public function replace( string $subject, string $replacement, int $limit = -1, ?int &$replacedCount = null ): string;

	/**
	 * Replaces the matches in a subject.
	 * @param string $subject The subject to replace its matches.
	 * @param string $replacement The replacement to replace the match with.
	 * @param int $limit The maximum possible replacements, otherwise -1.
	 * @param ?int $replacedCount If specified, stores the amount of replacements done.
	 * @return string The replaced string.
	 * @throws InvalidLimitExceptionInterface The limit is invalid.
	 * @throws RegularExpressionNotMatchingExceptionInterface The regular expression does not match.
	 */
	public function replaceThrowing( string $subject, string $replacement, int $limit = -1, ?int &$replacedCount = null ): string;
}
