<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\ValidValues;
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
				'regularExpression'           => new RegularExpression( ValidValues::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => ValidValues::REPEATED_SUBJECT,
				'replacement'                 => ValidValues::SIMPLE_REPLACEMENT,
				'validLimit'                  => -1,
				'expectedReplacedCount'       => 2,
				'expectedReplaceMethodResult' => '-replaced0123498765-0123456789-replaced0123498765-'
			],
			1 => [
				'regularExpression'           => new RegularExpression( ValidValues::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => ValidValues::REPEATED_SUBJECT,
				'replacement'                 => ValidValues::SIMPLE_REPLACEMENT,
				'validLimit'                  => 0,
				'expectedReplacedCount'       => 0,
				'expectedReplaceMethodResult' => 'foo(0123456789)0123456789bar(9876543210)'
			],
			2 => [
				'regularExpression'           => new RegularExpression( ValidValues::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => ValidValues::REPEATED_SUBJECT,
				'replacement'                 => ValidValues::SIMPLE_REPLACEMENT,
				'validLimit'                  => 1,
				'expectedReplacedCount'       => 1,
				'expectedReplaceMethodResult' => '-replaced0123498765-0123456789bar(9876543210)'
			],
			3 => [
				'regularExpression'           => new RegularExpression( ValidValues::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => ValidValues::REPEATED_SUBJECT,
				'replacement'                 => ValidValues::SIMPLE_REPLACEMENT,
				'validLimit'                  => 2,
				'expectedReplacedCount'       => 2,
				'expectedReplaceMethodResult' => '-replaced0123498765-0123456789-replaced0123498765-'
			],
			4 => [
				'regularExpression'           => new RegularExpression( ValidValues::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'             => ValidValues::REPEATED_SUBJECT,
				'replacement'                 => ValidValues::SIMPLE_REPLACEMENT,
				'validLimit'                  => 3,
				'expectedReplacedCount'       => 2,
				'expectedReplaceMethodResult' => '-replaced0123498765-0123456789-replaced0123498765-'
			]
		];
	}
}
