<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingsRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidator;
use Override;

/**
 * Represents a data provider providing validators with validator mappings.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValidatorMappingsArrayDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'         => new MappedArrayValidator(
					...$validatorMappings = Values::createEmptyValidatorMappings()
				),
				'validatorMappings' => $validatorMappings
			],
			1 => [
				'validator'         => new MappedArrayValidator(
					...$validatorMappings = Values::createValidatorMappings()
				),
				'validatorMappings' => $validatorMappings
			],
			2 => [
				'validator'         => new MappedArrayValidator(
					...$validatorMappings = Values::createValidatorMappingsWithUnknownKey()
				),
				'validatorMappings' => $validatorMappings
			],
			3 => [
				'validator'         => new MappedObjectValidator(
					...$validatorMappings = Values::createEmptyValidatorMappings()
				),
				'validatorMappings' => $validatorMappings
			],
			4 => [
				'validator'         => new MappedObjectValidator(
					...$validatorMappings = Values::createValidatorMappings()
				),
				'validatorMappings' => $validatorMappings
			],
			5 => [
				'validator'         => new MappedObjectValidator(
					...$validatorMappings = Values::createValidatorMappingsWithUnknownKey()
				),
				'validatorMappings' => $validatorMappings
			]
		];
	}
}
