<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMapping;
use Override;

/**
 * Represents a data provider providing validator mapping class names with key and validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorMappingClassNamesWithKeyAndValidatorDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorMappingClassName' => ValidatorMapping::class,
				'key'                       => Values::VALIDATOR_MAPPING_KEY_1,
				'validator'                 => Values::createValidator()
			],
			1 => [
				'validatorMappingClassName' => ValidatorMapping::class,
				'key'                       => Values::VALIDATOR_MAPPING_KEY_2,
				'validator'                 => Values::createValidator()
			],
			2 => [
				'validatorMappingClassName' => ValidatorMapping::class,
				'key'                       => Values::VALIDATOR_MAPPING_KEY_3,
				'validator'                 => Values::createValidator()
			]
		];
	}
}
