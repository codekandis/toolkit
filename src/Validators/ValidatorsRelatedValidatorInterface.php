<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use Countable;
use Iterator;
use Override;

/**
 * Represents the interface of any validators related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidatorsRelatedValidatorInterface extends ValidatorInterface, Countable, Iterator
{
	/**
	 * Gets the validators.
	 * @var array
	 */
	public array $validators {
		get;
	}

	/**
	 * Gets the number of validators.
	 * @return int The number of validators.
	 */
	#[Override]
	public function count(): int;

	/**
	 * Gets the current validator.
	 * @return false|ValidatorInterface The current validator.
	 */
	#[Override]
	public function current(): false | ValidatorInterface;

	/**
	 * Gets the key of the current validator.
	 * @return ?int The key of the current validator.
	 */
	#[Override]
	public function key(): ?int;

	/**
	 * Moves the internal pointer to the next validator.
	 */
	#[Override]
	public function next(): void;

	/**
	 * Rewinds the internal pointer to the first validator.
	 */
	#[Override]
	public function rewind(): void;

	/**
	 * Determines if the internal pointer points to a validator.
	 * @return bool True if the internal pointer points to a validator, false otherwise.
	 */
	#[Override]
	public function valid(): bool;
}
