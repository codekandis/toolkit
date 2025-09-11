<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\IntegerBackedEnumNotFoundException;
use CodeKandis\Types\IntegerBackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;

/**
 * Represents the base class of any integer backed enum name related validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractIntegerBackedEnumNameRelatedValidator extends BaseObject implements IntegerBackedEnumNameRelatedValidatorInterface
{
	/**
	 * @inheritdoc
	 */
	public string $integerBackedEnumName {
		get => $this->integerBackedEnumName;
	}

	/**
	 * Constructor method.
	 * @param string $integerBackedEnumName The name of the integer backed enum to manage.
	 * @throws IntegerBackedEnumNotFoundExceptionInterface The integer backed enum does not exist.
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	public function __construct( string $integerBackedEnumName )
	{
		$this->integerBackedEnumName = $integerBackedEnumName;

		if (
			false === new IsIntegerBackedEnumNameValidator()->validate( $this->integerBackedEnumName )
		)
		{
			throw IntegerBackedEnumNotFoundException::withNonExistentIntegerBackedEnumName( $this->integerBackedEnumName );
		}
	}
}
