<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\InvalidLimitException;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\ValidValues;
use Override;
use function sprintf;

/**
 * Represents a data provider providing regular expressions with invalid limit, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionsWithInvalidLimitExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpression'          => new RegularExpression( ValidValues::SIMPLE_REGULAR_EXPRESSION ),
				'invalidLimit'               => $invalidLimit = -2,
				'expectedThrowableClassName' => InvalidLimitException::class,
				'expectedThrowableMessage'   => sprintf( InvalidLimitException::EXCEPTION_MESSAGE_WITH_INVALID_LIMIT, $invalidLimit )
			],
			1 => [
				'regularExpression'          => new RegularExpression( ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'invalidLimit'               => $invalidLimit = -2,
				'expectedThrowableClassName' => InvalidLimitException::class,
				'expectedThrowableMessage'   => sprintf( InvalidLimitException::EXCEPTION_MESSAGE_WITH_INVALID_LIMIT, $invalidLimit )
			]
		];
	}
}
