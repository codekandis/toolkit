<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\Fixtures\Objects;

use CodeKandis\ToolKit\Validators\ValidatorInterface;
use CodeKandis\Types\NotImplementedOperationException;

/**
 * Represents the fixture of a validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorFixture implements ValidatorInterface
{
	/**
	 * @inheritdoc
	 * @throws NotImplementedOperationException The operation is not implemented.
	 */
	public function validate( mixed $value ): bool
	{
		throw new NotImplementedOperationException();
	}
}
