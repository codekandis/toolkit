<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\InvalidRegularExpressionException;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\InvalidValues;
use Override;
use function sprintf;

/**
 * Represents a data provider providing regular expression class names with invalid regular expression, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionClassNamesWithInvalidRegularExpressionExpectedThrowableAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpressionClassName' => RegularExpression::class,
				'invalidRegularExpression'   => $invalidRegularExpression = InvalidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'expectedThrowableClassName' => InvalidRegularExpressionException::class,
				'expectedThrowableMessage'   => sprintf( InvalidRegularExpressionException::EXCEPTION_MESSAGE_WITH_INVALID_REGULAR_EXPRESSION, $invalidRegularExpression )
			]
		];
	}
}
