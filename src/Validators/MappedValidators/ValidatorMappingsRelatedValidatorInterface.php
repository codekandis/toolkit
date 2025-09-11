<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\ToolKit\Validators\ValidatorInterface;
use Countable;
use Iterator;
use Override;

/**
 * Represents the interface of any validator mappings related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidatorMappingsRelatedValidatorInterface extends ValidatorInterface, Countable, Iterator
{
	/**
	 * Gets the validator mappings.
	 * @var ValidatorMappingInterface[]
	 */
	public array $validatorMappings {
		get;
	}

	/**
	 * Gets the number of validator mappings.
	 * @return int The number of validator mappings.
	 */
	#[Override]
	public function count(): int;

	/**
	 * Gets the current validator mapping.
	 * @return false|ValidatorMappingInterface The current validator mapping.
	 */
	#[Override]
	public function current(): false | ValidatorMappingInterface;

	/**
	 * Gets the key of the current validator mapping.
	 * @return ?int The key of the current validator mapping.
	 */
	#[Override]
	public function key(): ?int;

	/**
	 * Moves the internal pointer to the next validator mapping.
	 */
	#[Override]
	public function next(): void;

	/**
	 * Rewinds the internal pointer to the first validator mapping.
	 */
	#[Override]
	public function rewind(): void;

	/**
	 * Determines if the internal pointer points to a validator mapping.
	 * @return bool True if the internal pointer points to a validator mapping, false otherwise.
	 */
	#[Override]
	public function valid(): bool;
}
