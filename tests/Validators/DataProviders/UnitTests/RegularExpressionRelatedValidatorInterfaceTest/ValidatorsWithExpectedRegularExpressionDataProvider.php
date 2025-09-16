<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\RegularExpressionRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionValidator;
use Override;

/**
 * Represents a data provider providing validators with expected regular expression.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedRegularExpressionDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'                 => new IsMatchingRegularExpressionValidator( $regularExpression = Values::REG_EX_BINARY_STRING ),
				'expectedRegularExpression' => $regularExpression
			],
			1 => [
				'validator'                 => new IsMatchingRegularExpressionValidator( $regularExpression = Values::REG_EX_INTEGER_STRING ),
				'expectedRegularExpression' => $regularExpression
			],
			2 => [
				'validator'                 => new IsMatchingRegularExpressionValidator( $regularExpression = Values::REG_EX_FLOAT_STRING ),
				'expectedRegularExpression' => $regularExpression
			],
			3 => [
				'validator'                 => new NullableIsMatchingRegularExpressionValidator( $regularExpression = Values::REG_EX_BINARY_STRING ),
				'expectedRegularExpression' => $regularExpression
			],
			4 => [
				'validator'                 => new NullableIsMatchingRegularExpressionValidator( $regularExpression = Values::REG_EX_INTEGER_STRING ),
				'expectedRegularExpression' => $regularExpression
			],
			5 => [
				'validator'                 => new NullableIsMatchingRegularExpressionValidator( $regularExpression = Values::REG_EX_FLOAT_STRING ),
				'expectedRegularExpression' => $regularExpression
			]
		];
	}
}
