<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractDateTimeFormatRelatedValidatorTest\ValidatorClassNamesWithFormatDataProvider;
use CodeKandis\ToolKit\Validators\AbstractDateTimeFormatRelatedValidator;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractDateTimeFormatRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractDateTimeFormatRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractDateTimeFormatRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $format The `DateTime` format to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithFormatDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $format ): void
	{
		$validator = new $validatorClassName( $format );

		static::assertInstanceOf( AbstractDateTimeFormatRelatedValidator::class, $validator );
	}
}
