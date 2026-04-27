<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;

/**
 * Represents the base class of any array related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractArrayRelatedValidator extends BaseObject implements ArrayRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public array $array {
		get => $this->array;
	}

	/**
	 * Constructor method.
	 * @param array $array The array.
	 */
	public function __construct( array $array )
	{
		$this->array = $array;
	}
}
