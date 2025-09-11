<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Validators;

use CodeKandis\Types\InterfaceOrClassNotFoundExceptionInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use Override;

/**
 * Represents a validator validating if a specific value is of type `array` containing only elements of type `string` or `object` representing a subclass of a specific interface or class.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsSubClassOfArrayValidator extends AbstractInterfaceOrClassNameRelatedValidator implements IsSubClassOfArrayValidatorInterface
{
	/**
	 * @inheritdoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function validate( mixed $value ): bool
	{
		if (
			false === new IsArrayValidator()->validate( $value )
		)
		{
			return false;
		}

		try
		{
			$elementValidator = new IsSubClassOfValidator( $this->interfaceOrClassName );
		}
		catch ( InterfaceOrClassNotFoundExceptionInterface $throwable )
		{
			throw UnexpectedErrorException::withPreviousCatchedThrowable( $throwable );
		}

		foreach ( $value as $element )
		{
			if (
				false === $elementValidator->validate( $element )
			)
			{
				return false;
			}
		}

		return true;
	}
}
