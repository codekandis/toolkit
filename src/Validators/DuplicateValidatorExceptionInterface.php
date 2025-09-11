<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\LogicExceptionInterface;

/**
 * Represents the interface of any exception if a validator already exists.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DuplicateValidatorExceptionInterface extends LogicExceptionInterface
{
}
