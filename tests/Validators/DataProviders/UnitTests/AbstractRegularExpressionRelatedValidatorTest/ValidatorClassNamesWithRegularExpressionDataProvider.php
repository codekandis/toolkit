<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractRegularExpressionRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionValidator;
use Override;

/**
 * Represents a data provider providing validator class names with regular expression.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithRegularExpressionDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'validatorClassName' => IsMatchingRegularExpressionArrayValidator::class,
				'regularExpression'  => Values::REG_EX_BINARY_STRING
			],
			1  => [
				'validatorClassName' => IsMatchingRegularExpressionArrayValidator::class,
				'regularExpression'  => Values::REG_EX_INTEGER_STRING
			],
			2  => [
				'validatorClassName' => IsMatchingRegularExpressionArrayValidator::class,
				'regularExpression'  => Values::REG_EX_FLOAT_STRING
			],
			3  => [
				'validatorClassName' => IsMatchingRegularExpressionValidator::class,
				'regularExpression'  => Values::REG_EX_BINARY_STRING
			],
			4  => [
				'validatorClassName' => IsMatchingRegularExpressionValidator::class,
				'regularExpression'  => Values::REG_EX_INTEGER_STRING
			],
			5  => [
				'validatorClassName' => IsMatchingRegularExpressionValidator::class,
				'regularExpression'  => Values::REG_EX_FLOAT_STRING
			],
			6  => [
				'validatorClassName' => NullableIsMatchingRegularExpressionArrayValidator::class,
				'regularExpression'  => Values::REG_EX_BINARY_STRING
			],
			7  => [
				'validatorClassName' => NullableIsMatchingRegularExpressionArrayValidator::class,
				'regularExpression'  => Values::REG_EX_INTEGER_STRING
			],
			8  => [
				'validatorClassName' => NullableIsMatchingRegularExpressionArrayValidator::class,
				'regularExpression'  => Values::REG_EX_FLOAT_STRING
			],
			9  => [
				'validatorClassName' => NullableIsMatchingRegularExpressionValidator::class,
				'regularExpression'  => Values::REG_EX_BINARY_STRING
			],
			10 => [
				'validatorClassName' => NullableIsMatchingRegularExpressionValidator::class,
				'regularExpression'  => Values::REG_EX_INTEGER_STRING
			],
			11 => [
				'validatorClassName' => NullableIsMatchingRegularExpressionValidator::class,
				'regularExpression'  => Values::REG_EX_FLOAT_STRING
			]
		];
	}
}
