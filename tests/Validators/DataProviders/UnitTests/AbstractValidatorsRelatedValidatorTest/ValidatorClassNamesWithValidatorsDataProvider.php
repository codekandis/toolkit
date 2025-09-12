<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractValidatorsRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableValidatorChain;
use CodeKandis\ToolKit\Validators\ValidatorChain;
use Override;

/**
 * Represents a data provider providing validator class names with validators.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithValidatorsDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName' => ValidatorChain::class,
				'validators'         => Values::createEmptyValidators()
			],
			1 => [
				'validatorClassName' => ValidatorChain::class,
				'validators'         => Values::createValidators()
			],
			2 => [
				'validatorClassName' => NullableValidatorChain::class,
				'validators'         => Values::createEmptyValidators()
			],
			3 => [
				'validatorClassName' => NullableValidatorChain::class,
				'validators'         => Values::createValidators()
			]
		];
	}
}
