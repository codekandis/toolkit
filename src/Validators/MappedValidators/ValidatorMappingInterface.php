<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\ToolKit\Validators\ValidatorInterface;

/**
 * Represents the interface of any validator mapping.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidatorMappingInterface
{
	/**
	 * Gets the key of the validator mapping.
	 * @var int|string
	 */
	public int | string $key {
		get;
	}

	/**
	 * Gets the validator of the validator mapping.
	 * @var ValidatorInterface
	 */
	public ValidatorInterface $validator {
		get;
	}
}
