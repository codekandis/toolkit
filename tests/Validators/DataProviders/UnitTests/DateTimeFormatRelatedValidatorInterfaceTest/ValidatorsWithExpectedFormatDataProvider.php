<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\DateTimeFormatRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringByFormatValidator;
use Override;

/**
 * Represents a data provider providing validators with expected format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedFormatDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'      => new IsDateTimeStringArrayByFormatValidator( $format = Values::DATETIME_FORMAT_1 ),
				'expectedFormat' => $format
			],
			1 => [
				'validator'      => new IsDateTimeStringArrayByFormatValidator( $format = Values::DATETIME_FORMAT_2 ),
				'expectedFormat' => $format
			],
			2 => [
				'validator'      => new IsDateTimeStringByFormatValidator( $format = Values::DATETIME_FORMAT_1 ),
				'expectedFormat' => $format
			],
			3 => [
				'validator'      => new IsDateTimeStringByFormatValidator( $format = Values::DATETIME_FORMAT_2 ),
				'expectedFormat' => $format
			],
			4 => [
				'validator'      => new NullableIsDateTimeStringArrayByFormatValidator( $format = Values::DATETIME_FORMAT_1 ),
				'expectedFormat' => $format
			],
			5 => [
				'validator'      => new NullableIsDateTimeStringArrayByFormatValidator( $format = Values::DATETIME_FORMAT_2 ),
				'expectedFormat' => $format
			],
			6 => [
				'validator'      => new NullableIsDateTimeStringByFormatValidator( $format = Values::DATETIME_FORMAT_1 ),
				'expectedFormat' => $format
			],
			7 => [
				'validator'      => new NullableIsDateTimeStringByFormatValidator( $format = Values::DATETIME_FORMAT_2 ),
				'expectedFormat' => $format
			]
		];
	}
}
