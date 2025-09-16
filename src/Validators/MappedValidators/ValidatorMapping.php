<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\ToolKit\Validators\ValidatorInterface;
use CodeKandis\Types\BaseObject;

/**
 * Represents a validator mapping.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorMapping extends BaseObject implements ValidatorMappingInterface
{
	/**
	 * @inheritdoc
	 */
	public int | string $key {
		get => $this->key;
	}

	/**
	 * @inheritdoc
	 */
	public ValidatorInterface $validator {
		get => $this->validator;
	}

	/**
	 * Constructor method.
	 * @param int|string $key The key of the validator mapping.
	 * @param ValidatorInterface $validator The validator of the validator mapping.
	 */
	public function __construct( int | string $key, ValidatorInterface $validator )
	{
		$this->key       = $key;
		$this->validator = $validator;
	}
}
