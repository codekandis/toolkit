<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\InvalidRegularExpressionExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionException;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\InvalidValues;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid regular expression, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidRegularExpressionExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidRegularExpressionException::class,
				'invalidRegularExpression'   => $invalidRegularExpression = InvalidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			]
		];
	}
}
