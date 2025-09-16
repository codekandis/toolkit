<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\ValidatorMappingsRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidator;
use Override;

/**
 * Represents a data provider providing validators with expected validator mappings.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedValidatorMappingsDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'                 => new MappedArrayValidator(
					...$validatorMappings = Values::createEmptyValidatorMappings()
				),
				'expectedValidatorMappings' => $validatorMappings
			],
			1 => [
				'validator'                 => new MappedArrayValidator(
					...$validatorMappings = Values::createValidatorMappings()
				),
				'expectedValidatorMappings' => $validatorMappings
			],
			2 => [
				'validator'                 => new MappedArrayValidator(
					...$validatorMappings = Values::createValidatorMappingsWithUnknownKey()
				),
				'expectedValidatorMappings' => $validatorMappings
			],
			3 => [
				'validator'                 => new MappedObjectValidator(
					...$validatorMappings = Values::createEmptyValidatorMappings()
				),
				'expectedValidatorMappings' => $validatorMappings
			],
			4 => [
				'validator'                 => new MappedObjectValidator(
					...$validatorMappings = Values::createValidatorMappings()
				),
				'expectedValidatorMappings' => $validatorMappings
			],
			5 => [
				'validator'                 => new MappedObjectValidator(
					...$validatorMappings = Values::createValidatorMappingsWithUnknownKey()
				),
				'expectedValidatorMappings' => $validatorMappings
			]
		];
	}
}
