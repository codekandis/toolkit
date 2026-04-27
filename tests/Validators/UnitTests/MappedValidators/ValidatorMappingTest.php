<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests\MappedValidators;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingTest\ValidatorMappingClassNamesWithKeyAndValidatorDataProvider;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMapping;
use CodeKandis\ToolKit\Validators\ValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ValidatorMapping}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorMappingTest extends TestCase
{
	/**
	 * Tests if {@link ValidatorMapping::__construct()} instantiates the validator mapping correctly.
	 * @param string $validatorMappingClassName The class name of the validator mapping to test.
	 * @param int|string $key The key to pass.
	 * @param ValidatorInterface $validator The validator to pass.
	 */
	#[DataProviderExternal( ValidatorMappingClassNamesWithKeyAndValidatorDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorMappingCorrectly( string $validatorMappingClassName, int | string $key, ValidatorInterface $validator ): void
	{
		$resultedValidatorMapping = new $validatorMappingClassName( $key, $validator );

		static::assertInstanceOf( ValidatorMapping::class, $resultedValidatorMapping );
	}
}
