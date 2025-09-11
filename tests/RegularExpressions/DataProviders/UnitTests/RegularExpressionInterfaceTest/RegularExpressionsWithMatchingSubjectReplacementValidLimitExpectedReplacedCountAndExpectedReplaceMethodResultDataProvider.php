<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing regular expressions with non-matching subject, replacement, valid limit, expected replaced count and expected replace method result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionsWithMatchingSubjectReplacementValidLimitExpectedReplacedCountAndExpectedReplaceMethodResultDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpression'           => new RegularExpression( Values::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => Values::REPEATED_SUBJECT,
				'replacement'                 => Values::SIMPLE_REPLACEMENT,
				'validLimit'                  => Values::LIMIT_MINUS_1,
				'expectedReplacedCount'       => Values::REPLACED_COUNT_2,
				'expectedReplaceMethodResult' => Values::REPLACE_RESULT_1
			],
			1 => [
				'regularExpression'           => new RegularExpression( Values::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => Values::REPEATED_SUBJECT,
				'replacement'                 => Values::SIMPLE_REPLACEMENT,
				'validLimit'                  => Values::LIMIT_0,
				'expectedReplacedCount'       => Values::REPLACED_COUNT_0,
				'expectedReplaceMethodResult' => Values::REPLACE_RESULT_2
			],
			2 => [
				'regularExpression'           => new RegularExpression( Values::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => Values::REPEATED_SUBJECT,
				'replacement'                 => Values::SIMPLE_REPLACEMENT,
				'validLimit'                  => Values::LIMIT_1,
				'expectedReplacedCount'       => Values::REPLACED_COUNT_1,
				'expectedReplaceMethodResult' => Values::REPLACE_RESULT_3
			],
			3 => [
				'regularExpression'           => new RegularExpression( Values::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => Values::REPEATED_SUBJECT,
				'replacement'                 => Values::SIMPLE_REPLACEMENT,
				'validLimit'                  => Values::LIMIT_2,
				'expectedReplacedCount'       => Values::REPLACED_COUNT_2,
				'expectedReplaceMethodResult' => Values::REPLACE_RESULT_1
			],
			4 => [
				'regularExpression'           => new RegularExpression( Values::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => Values::REPEATED_SUBJECT,
				'replacement'                 => Values::SIMPLE_REPLACEMENT,
				'validLimit'                  => Values::LIMIT_3,
				'expectedReplacedCount'       => Values::REPLACED_COUNT_2,
				'expectedReplaceMethodResult' => Values::REPLACE_RESULT_1
			]
		];
	}
}
