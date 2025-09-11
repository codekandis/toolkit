<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractDateTimeFormatRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringByFormatValidator;
use Override;

/**
 * Represents a data provider providing validator class names with format.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithFormatDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName' => IsDateTimeStringArrayByFormatValidator::class,
				'format'             => Values::DATETIME_FORMAT_1
			],
			1 => [
				'validatorClassName' => IsDateTimeStringArrayByFormatValidator::class,
				'format'             => Values::DATETIME_FORMAT_2
			],
			2 => [
				'validatorClassName' => IsDateTimeStringByFormatValidator::class,
				'format'             => Values::DATETIME_FORMAT_1
			],
			3 => [
				'validatorClassName' => IsDateTimeStringByFormatValidator::class,
				'format'             => Values::DATETIME_FORMAT_2
			],
			4 => [
				'validatorClassName' => NullableIsDateTimeStringArrayByFormatValidator::class,
				'format'             => Values::DATETIME_FORMAT_1
			],
			5 => [
				'validatorClassName' => NullableIsDateTimeStringArrayByFormatValidator::class,
				'format'             => Values::DATETIME_FORMAT_2
			],
			6 => [
				'validatorClassName' => NullableIsDateTimeStringByFormatValidator::class,
				'format'             => Values::DATETIME_FORMAT_1
			],
			7 => [
				'validatorClassName' => NullableIsDateTimeStringByFormatValidator::class,
				'format'             => Values::DATETIME_FORMAT_2
			]
		];
	}
}
