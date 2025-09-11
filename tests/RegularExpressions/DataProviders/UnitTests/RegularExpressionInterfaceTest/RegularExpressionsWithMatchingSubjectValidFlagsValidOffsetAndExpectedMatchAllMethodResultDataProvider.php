<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionMatchFlag;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing regular expressions with matching subject, valid flags, valid offset and expected match all method result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionsWithMatchingSubjectValidFlagsValidOffsetAndExpectedMatchAllMethodResultDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpression'            => new RegularExpression( Values::SIMPLE_REGULAR_EXPRESSION ),
				'matchingSubject'              => Values::SIMPLE_SUBJECT,
				'validFlags'                   => RegularExpressionMatchFlag::None->value,
				'validOffset'                  => Values::OFFSET,
				'expectedMatchAllMethodResult' => Values::MATCH_ALL_RESULT_1
			],
			1 => [
				'regularExpression'            => new RegularExpression( Values::REPEATED_GROUPED_REGULAR_EXPRESSION ),
				'matchingSubject'              => Values::REPEATED_SUBJECT,
				'validFlags'                   => RegularExpressionMatchFlag::None->value,
				'validOffset'                  => Values::OFFSET,
				'expectedMatchAllMethodResult' => Values::MATCH_ALL_RESULT_2
			]
		];
	}
}
