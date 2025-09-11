<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators\MappedValidators;

use CodeKandis\Types\LogicExceptionInterface;

/**
 * Represents the interface of any exception if a validator mapping already exists.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DuplicateValidatorMappingExceptionInterface extends LogicExceptionInterface
{
}
