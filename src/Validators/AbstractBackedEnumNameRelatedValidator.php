<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BackedEnumNotFoundException;
use CodeKandis\Types\BackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\BaseObject;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;

/**
 * Represents the base class of any backed enum name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractBackedEnumNameRelatedValidator extends BaseObject implements BackedEnumNameRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $backedEnumName {
		get => $this->backedEnumName;
	}

	/**
	 * Constructor method.
	 * @param string $backedEnumName The name of the backed enum to manage.
	 * @throws BackedEnumNotFoundExceptionInterface The backed enum does not exist.
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	public function __construct( string $backedEnumName )
	{
		$this->backedEnumName = $backedEnumName;

		if (
			false === new IsBackedEnumNameValidator()->validate( $this->backedEnumName )
		)
		{
			throw BackedEnumNotFoundException::withNonExistentBackedEnumName( $this->backedEnumName );
		}
	}
}
