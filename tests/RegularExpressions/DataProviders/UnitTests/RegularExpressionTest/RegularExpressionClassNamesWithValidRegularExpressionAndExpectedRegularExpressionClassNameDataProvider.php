<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\ValidValues;
use Override;

/**
 * Represents a data provider providing regular expression class names with valid regular expression and expected regular expression class name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionClassNamesWithValidRegularExpressionAndExpectedRegularExpressionClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpressionClassName'         => $regularExpressionClassName = RegularExpression::class,
				'validRegularExpression'             => ValidValues::SIMPLE_REGULAR_EXPRESSION,
				'expectedRegularExpressionClassName' => $regularExpressionClassName
			],
			1 => [
				'regularExpressionClassName'         => $regularExpressionClassName = RegularExpression::class,
				'validRegularExpression'             => ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'expectedRegularExpressionClassName' => $regularExpressionClassName
			]
		];
	}
}
