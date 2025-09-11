<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\AbstractValidatorMappingsRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\DuplicateValidatorMappingException;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidator;
use Override;

/**
 * Represents a data provider providing validator class names with validator mappings, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithValidatorMappingsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'         => MappedArrayValidator::class,
				'validatorMappings'          => Values::createValidatorMappingsWithDuplicateKey(),
				'expectedThrowableClassName' => DuplicateValidatorMappingException::class,
				'expectedThrowableMessage'   => sprintf( DuplicateValidatorMappingException::EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY, Values::VALIDATOR_MAPPING_KEY_3 )
			],
			1 => [
				'validatorClassName'         => MappedObjectValidator::class,
				'validatorMappings'          => Values::createValidatorMappingsWithDuplicateKey(),
				'expectedThrowableClassName' => DuplicateValidatorMappingException::class,
				'expectedThrowableMessage'   => sprintf( DuplicateValidatorMappingException::EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY, Values::VALIDATOR_MAPPING_KEY_3 )
			]
		];
	}
}
