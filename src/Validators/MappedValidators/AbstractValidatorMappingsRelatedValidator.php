<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\Types\BaseObject;
use Override;
use function count;
use function current;
use function key;
use function next;
use function reset;

/**
 * Represents the base class of any validator mappings related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractValidatorMappingsRelatedValidator extends BaseObject implements ValidatorMappingsRelatedValidatorInterface
{
	/**
	 * Stores the internal list of validator mappings.
	 * @var ValidatorMappingInterface[]
	 */
	private array $elements = [];

	/**
	 * @inheritdoc
	 */
	public array $validatorMappings {
		get => $this->elements;
	}

	/**
	 * Constructor method.
	 * @param ValidatorMappingInterface[] $validatorMappings The validator mappings of the validator.
	 * @throws DuplicateValidatorMappingExceptionInterface A validator mapping with a specific key already exists.
	 */
	public function __construct( ValidatorMappingInterface ...$validatorMappings )
	{
		$this->add( ...$validatorMappings );
	}

	/**
	 * Gets a validator mapping by its key.
	 * @param int|string $key The key of the validator mapping to find.
	 * @return ?ValidatorMappingInterface The validator mapping.
	 */
	private function findByKey( int | string $key ): ?ValidatorMappingInterface
	{
		foreach ( $this->elements as $element )
		{
			if ( $element->key === $key )
			{
				return $element;
			}
		}

		return null;
	}

	/**
	 * Adds validator mappings to the list.
	 * @param ValidatorMappingInterface[] $validatorMappings The validator mappings to add.
	 * @throws DuplicateValidatorMappingExceptionInterface A validator mapping with a specific key already exists.
	 */
	private function add( ValidatorMappingInterface ...$validatorMappings ): void
	{
		foreach ( $validatorMappings as $validatorMapping )
		{
			if (
				null !== $this->findByKey( $validatorMapping->key )
			)
			{
				throw DuplicateValidatorMappingException::withDuplicateKey( $validatorMapping->key );
			}
			$this->elements[] = $validatorMapping;
		}
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function count(): int
	{
		return count( $this->elements );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function current(): false | ValidatorMappingInterface
	{
		return current( $this->elements );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function key(): ?int
	{
		return key( $this->elements );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function next(): void
	{
		next( $this->elements );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function rewind(): void
	{
		reset( $this->elements );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function valid(): bool
	{
		return null !== $this->key();
	}
}
