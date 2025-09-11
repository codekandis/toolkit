<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionNotMatchingExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionNotMatchingException;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\ValidValues;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonmatching regular expression, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonMatchingRegularExpressionExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'           => $throwableClassName = RegularExpressionNotMatchingException::class,
				'nonMatchingRegularExpression' => $nonMatchingRegularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( RegularExpressionNotMatchingException::EXCEPTION_MESSAGE_WITH_NONMATHCING_REGULAR_EXPRESSION, $nonMatchingRegularExpression )
			]
		];
	}
}
