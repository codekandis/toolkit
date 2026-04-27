<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionMatchFlag;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing regular expressions with non-matching subject, valid flags and valid offset.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionsWithNonMatchingSubjectValidFlagsAndValidOffsetDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpression'  => new RegularExpression( Values::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'nonMatchingSubject' => Values::SIMPLE_NONMATCHING_SUBJECT,
				'validFlags'         => RegularExpressionMatchFlag::None->value,
				'validOffset'        => Values::OFFSET
			]
		];
	}
}
