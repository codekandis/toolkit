<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionValidator;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\InvalidValues;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\ValidValues;
use Override;

/**
 * Represents a data provider providing regular expression validators with regular expression and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionValidatorsWithRegularExpressionAndExpectedValidationResultDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpressionValidator' => new RegularExpressionValidator(),
				'regularExpression'          => InvalidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'expectedValidationResult'   => false
			],
			1 => [
				'regularExpressionValidator' => new RegularExpressionValidator(),
				'regularExpression'          => ValidValues::SIMPLE_REGULAR_EXPRESSION,
				'expectedValidationResult'   => true
			],
			2 => [
				'regularExpressionValidator' => new RegularExpressionValidator(),
				'regularExpression'          => ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION,
				'expectedValidationResult'   => true
			]
		];
	}
}
