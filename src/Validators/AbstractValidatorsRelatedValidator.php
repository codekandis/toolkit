<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use Override;
use function count;
use function current;
use function key;
use function next;
use function reset;

/**
 * Represents the base class of any validators related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractValidatorsRelatedValidator extends BaseObject implements ValidatorsRelatedValidatorInterface
{
	/**
	 * Stores the internal list of validators.
	 * @var ValidatorInterface[]
	 */
	protected array $elements = [];

	/**
	 * @inheritdoc
	 */
	public array $validators {
		get => $this->elements;
	}

	/**
	 * Constructor method.
	 * @param ValidatorInterface[] $validators The validators of the validator.
	 * @throws DuplicateValidatorExceptionInterface A validator with a specific class name already exists.
	 */
	public function __construct( ValidatorInterface ...$validators )
	{
		$this->add( ...$validators );
	}

	/**
	 * Gets a validator by its class name.
	 * @param string $className The class name of the validator to find.
	 * @return ?ValidatorInterface The validator.
	 */
	private function findByClassName( string $className ): ?ValidatorInterface
	{
		foreach ( $this->elements as $element )
		{
			if ( $element::class === $className )
			{
				return $element;
			}
		}

		return null;
	}

	/**
	 * Adds validators to the list.
	 * @param ValidatorInterface[] $validators The validators to add.
	 * @throws DuplicateValidatorExceptionInterface A validator with a specific class name already exists.
	 */
	private function add( ValidatorInterface ...$validators ): void
	{
		foreach ( $validators as $validator )
		{
			if (
				null !== $this->findByClassName( $validator::class )
			)
			{
				throw DuplicateValidatorException::withDuplicateValidator( $validator );
			}
			$this->elements[] = $validator;
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
	public function current(): false | ValidatorInterface
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
