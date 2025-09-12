<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\AbstractValidatorMappingsRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedArrayValidator;
use Override;

/**
 * Represents a data provider providing validator class names with validator mappings.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithValidatorMappingsDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName' => MappedArrayValidator::class,
				'validatorMappings'  => Values::createEmptyValidatorMappings()
			],
			1 => [
				'validatorClassName' => MappedArrayValidator::class,
				'validatorMappings'  => Values::createValidatorMappings()
			],
			2 => [
				'validatorClassName' => MappedArrayValidator::class,
				'validatorMappings'  => Values::createValidatorMappingsWithUnknownKey()
			],
			3 => [
				'validatorClassName' => NullableMappedArrayValidator::class,
				'validatorMappings'  => Values::createEmptyValidatorMappings()
			],
			4 => [
				'validatorClassName' => NullableMappedArrayValidator::class,
				'validatorMappings'  => Values::createValidatorMappings()
			],
			5 => [
				'validatorClassName' => NullableMappedArrayValidator::class,
				'validatorMappings'  => Values::createValidatorMappingsWithUnknownKey()
			]
		];
	}
}
