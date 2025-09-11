<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\RegularExpressionRelatedValidatorInterfaceTest\ValidatorsWithExpectedRegularExpressionDataProvider;
use CodeKandis\ToolKit\Validators\RegularExpressionRelatedValidatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link RegularExpressionRelatedValidatorInterface}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionRelatedValidatorInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link RegularExpressionRelatedValidatorInterface::$regularExpression} returns the expected regular expression correctly.
	 * @param RegularExpressionRelatedValidatorInterface $validator The validator to test.
	 * @param string $expectedRegularExpression The expected regular expression.
	 */
	#[DataProviderExternal( ValidatorsWithExpectedRegularExpressionDataProvider::class, 'provideData' )]
	public function testIfPropertyRegularExpressionReturnsExpectedRegularExpressionCorrectly( RegularExpressionRelatedValidatorInterface $validator, string $expectedRegularExpression ): void
	{
		$resultedRegularExpression = $validator->regularExpression;

		static::assertSame( $expectedRegularExpression, $resultedRegularExpression );
	}
}
