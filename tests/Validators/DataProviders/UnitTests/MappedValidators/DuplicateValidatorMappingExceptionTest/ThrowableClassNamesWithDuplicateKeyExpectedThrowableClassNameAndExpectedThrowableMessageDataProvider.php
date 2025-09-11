<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\MappedValidators\DuplicateValidatorMappingExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\DuplicateValidatorMappingException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with duplicate key, expected throwable class name and expected throwable message.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithDuplicateKeyExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorMappingException::class,
				'duplicateKey'               => $duplicateKey = Values::VALIDATOR_MAPPING_KEY_1,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY, $duplicateKey )
			],
			1 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorMappingException::class,
				'duplicateKey'               => $duplicateKey = Values::VALIDATOR_MAPPING_KEY_2,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY, $duplicateKey )
			],
			2 => [
				'throwableClassName'         => $throwableClassName = DuplicateValidatorMappingException::class,
				'duplicateKey'               => $duplicateKey = Values::VALIDATOR_MAPPING_KEY_3,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATE_KEY, $duplicateKey )
			]
		];
	}
}
