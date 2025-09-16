<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\AbstractValidatorsRelatedValidatorTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\DuplicateValidatorException;
use CodeKandis\ToolKit\Validators\NullableValidatorChain;
use CodeKandis\ToolKit\Validators\ValidatorChain;
use Override;

/**
 * Represents a data provider providing validator class names with validators, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClassNamesWithValidatorsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validatorClassName'         => ValidatorChain::class,
				'validators'                 => $validators = Values::createValidatorsWithDuplicateValidator(),
				'expectedThrowableClassName' => DuplicateValidatorException::class,
				'expectedThrowableMessage'   => sprintf( DuplicateValidatorException::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $validators[ 0 ] )
			],
			1 => [
				'validatorClassName'         => NullableValidatorChain::class,
				'validators'                 => $validators = Values::createValidatorsWithDuplicateValidator(),
				'expectedThrowableClassName' => DuplicateValidatorException::class,
				'expectedThrowableMessage'   => sprintf( DuplicateValidatorException::EXCEPTION_MESSAGE_WITH_DUPLICATE_VALIDATOR_CLASS_NAME, $validators[ 0 ] )
			]
		];
	}
}
