<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\StringBackedEnumNotFoundException;
use CodeKandis\Types\StringBackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;

/**
 * Represents the base class of any string backed enum name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractStringBackedEnumNameRelatedValidator extends BaseObject implements StringBackedEnumNameRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $stringBackedEnumName {
		get => $this->stringBackedEnumName;
	}

	/**
	 * Constructor method.
	 * @param string $stringBackedEnumName The name of the string backed enum to manage.
	 * @throws StringBackedEnumNotFoundExceptionInterface The string backed enum does not exist.
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	public function __construct( string $stringBackedEnumName )
	{
		$this->stringBackedEnumName = $stringBackedEnumName;

		if (
			false === new IsStringBackedEnumNameValidator()->validate( $this->stringBackedEnumName )
		)
		{
			throw StringBackedEnumNotFoundException::withNonExistentStringBackedEnumName( $this->stringBackedEnumName );
		}
	}
}
