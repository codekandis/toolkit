<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractArrayRelatedValidatorTest\ValidatorClassNamesWithArrayDataProvider;
use CodeKandis\ToolKit\Validators\AbstractArrayRelatedValidator;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractArrayRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractArrayRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractArrayRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param array $array The array to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithArrayDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, array $array ): void
	{
		$resultedValidator = new $validatorClassName( $array );

		static::assertInstanceOf( AbstractArrayRelatedValidator::class, $resultedValidator );
	}
}
