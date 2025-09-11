<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\ValidatorMapping;
use Override;

/**
 * Represents a data provider providing validator mappings with expected validator.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorMappingsWithExpectedValidatorDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorMapping'  => new ValidatorMapping(
					Values::VALIDATOR_MAPPING_KEY_1,
					$validator = Values::createValidator()
				),
				'expectedValidator' => $validator
			],
			1 => [
				'validatorMapping'  => new ValidatorMapping(
					Values::VALIDATOR_MAPPING_KEY_2,
					$validator = Values::createValidator()
				),
				'expectedValidator' => $validator
			],
			2 => [
				'validatorMapping'  => new ValidatorMapping(
					Values::VALIDATOR_MAPPING_KEY_3,
					$validator = Values::createValidator()
				),
				'expectedValidator' => $validator
			]
		];
	}
}
