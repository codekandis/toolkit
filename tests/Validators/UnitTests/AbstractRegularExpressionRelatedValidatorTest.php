<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionExceptionInterface;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractRegularExpressionRelatedValidatorTest\ValidatorClassNamesWithInvalidRegularExpressionExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractRegularExpressionRelatedValidatorTest\ValidatorClassNamesWithRegularExpressionDataProvider;
use CodeKandis\ToolKit\Validators\AbstractRegularExpressionRelatedValidator;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link AbstractRegularExpressionRelatedValidator}.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractRegularExpressionRelatedValidatorTest extends TestCase
{
	/**
	 * Tests if {@link AbstractRegularExpressionRelatedValidator::__construct()} throws an {@link InvalidRegularExpressionExceptionInterface} on an invalid regular expression.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param mixed $invalidRegularExpression The invalid regular expression to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithInvalidRegularExpressionExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfConstructorThrowsInvalidValueExceptionInterfaceOnInvalidRegularExpression( string $validatorClassName, string $invalidRegularExpression, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			new $validatorClassName( $invalidRegularExpression );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InvalidRegularExpressionExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if {@link AbstractRegularExpressionRelatedValidator::__construct()} instantiates the validator correctly.
	 * @param string $validatorClassName The class name of the validator to test.
	 * @param string $regularExpression The regular expression to pass.
	 */
	#[DataProviderExternal( ValidatorClassNamesWithRegularExpressionDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesValidatorCorrectly( string $validatorClassName, string $regularExpression ): void
	{
		$resultedValidator = new $validatorClassName( $regularExpression );

		static::assertInstanceOf( AbstractRegularExpressionRelatedValidator::class, $resultedValidator );
	}
}
