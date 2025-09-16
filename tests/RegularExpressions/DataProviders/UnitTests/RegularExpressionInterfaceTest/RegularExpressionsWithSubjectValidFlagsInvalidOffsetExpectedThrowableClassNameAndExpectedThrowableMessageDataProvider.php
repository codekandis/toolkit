<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\RegularExpressions\DataProviders\UnitTests\RegularExpressionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\RegularExpressions\RegularExpression;
use CodeKandis\ToolKit\RegularExpressions\RegularExpressionMatchFlag;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\InvalidValues;
use CodeKandis\ToolKit\Tests\RegularExpressions\Fixtures\ValidValues;
use CodeKandis\Types\OffsetOutOfRangeException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing regular expressions with subject, valid flags, invalid offset expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class RegularExpressionsWithSubjectValidFlagsInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'subject'                    => ValidValues::SIMPLE_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::None->value,
				'invalidOffset'              => $invalidOffset = InvalidValues::OFFSET,
				'expectedThrowableClassName' => OffsetOutOfRangeException::class,
				'expectedThrowableMessage'   => sprintf( OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $invalidOffset, -ValidValues::SIMPLE_SUBJECT_LENGTH, ValidValues::SIMPLE_SUBJECT_LENGTH )
			],
			1 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'subject'                    => ValidValues::SIMPLE_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::OffsetCapture->value,
				'invalidOffset'              => $invalidOffset = InvalidValues::OFFSET,
				'expectedThrowableClassName' => OffsetOutOfRangeException::class,
				'expectedThrowableMessage'   => sprintf( OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $invalidOffset, -ValidValues::SIMPLE_SUBJECT_LENGTH, ValidValues::SIMPLE_SUBJECT_LENGTH )
			],
			2 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'subject'                    => ValidValues::SIMPLE_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::UnmatchedAsNull->value,
				'invalidOffset'              => $invalidOffset = InvalidValues::OFFSET,
				'expectedThrowableClassName' => OffsetOutOfRangeException::class,
				'expectedThrowableMessage'   => sprintf( OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $invalidOffset, -ValidValues::SIMPLE_SUBJECT_LENGTH, ValidValues::SIMPLE_SUBJECT_LENGTH )
			],
			3 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'subject'                    => ValidValues::SIMPLE_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::OffsetCapture->value | RegularExpressionMatchFlag::UnmatchedAsNull->value,
				'invalidOffset'              => $invalidOffset = InvalidValues::OFFSET,
				'expectedThrowableClassName' => OffsetOutOfRangeException::class,
				'expectedThrowableMessage'   => sprintf( OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $invalidOffset, -ValidValues::SIMPLE_SUBJECT_LENGTH, ValidValues::SIMPLE_SUBJECT_LENGTH )
			],
			4 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'subject'                    => ValidValues::SIMPLE_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::None->value,
				'invalidOffset'              => $invalidOffset = InvalidValues::OFFSET,
				'expectedThrowableClassName' => OffsetOutOfRangeException::class,
				'expectedThrowableMessage'   => sprintf( OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $invalidOffset, -ValidValues::SIMPLE_SUBJECT_LENGTH, ValidValues::SIMPLE_SUBJECT_LENGTH )
			],
			5 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'subject'                    => ValidValues::SIMPLE_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::OffsetCapture->value,
				'invalidOffset'              => $invalidOffset = InvalidValues::OFFSET,
				'expectedThrowableClassName' => OffsetOutOfRangeException::class,
				'expectedThrowableMessage'   => sprintf( OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $invalidOffset, -ValidValues::SIMPLE_SUBJECT_LENGTH, ValidValues::SIMPLE_SUBJECT_LENGTH )
			],
			6 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'subject'                    => ValidValues::SIMPLE_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::UnmatchedAsNull->value,
				'invalidOffset'              => $invalidOffset = InvalidValues::OFFSET,
				'expectedThrowableClassName' => OffsetOutOfRangeException::class,
				'expectedThrowableMessage'   => sprintf( OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $invalidOffset, -ValidValues::SIMPLE_SUBJECT_LENGTH, ValidValues::SIMPLE_SUBJECT_LENGTH )
			],
			7 => [
				'regularExpression'          => new RegularExpression( $regularExpression = ValidValues::SIMPLE_GROUPED_REGULAR_EXPRESSION ),
				'subject'                    => ValidValues::SIMPLE_SUBJECT,
				'validFlags'                 => RegularExpressionMatchFlag::OffsetCapture->value | RegularExpressionMatchFlag::UnmatchedAsNull->value,
				'invalidOffset'              => $invalidOffset = InvalidValues::OFFSET,
				'expectedThrowableClassName' => OffsetOutOfRangeException::class,
				'expectedThrowableMessage'   => sprintf( OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $invalidOffset, -ValidValues::SIMPLE_SUBJECT_LENGTH, ValidValues::SIMPLE_SUBJECT_LENGTH )
			]
		];
	}
}
