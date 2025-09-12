<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest\ValidatorsWithValueAndExpectedValidationResultDataProvider;
use CodeKandis\ToolKit\Validators\ValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ValidatorInterface::validate()} validates a value correctly.
	 * @param ValidatorInterface $validator The validator to test.
	 * @param mixed $value The value to pass.
	 * @param mixed $expectedValidationResult The expected validation result.
	 */
	#[DataProviderExternal( ValidatorsWithValueAndExpectedValidationResultDataProvider::class, 'provideData' )]
	public function testIfMethodValidateValidatesValueCorrectly( ValidatorInterface $validator, mixed $value, mixed $expectedValidationResult ): void
	{
		$resultedValidationResult = $validator->validate( $value );

		static::assertSame( $expectedValidationResult, $resultedValidationResult );
	}
}
