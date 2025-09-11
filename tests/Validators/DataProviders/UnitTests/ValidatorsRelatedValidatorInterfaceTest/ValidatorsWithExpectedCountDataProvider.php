<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorsRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableValidatorChain;
use CodeKandis\ToolKit\Validators\ValidatorChain;
use Override;
use function count;

/**
 * Represents a data provider providing validators with expected count.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedCountDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'     => new ValidatorChain(
					...$validators = Values::createEmptyValidators()
				),
				'expectedCount' => count( $validators )
			],
			1 => [
				'validator'     => new ValidatorChain(
					...$validators = Values::createValidators()
				),
				'expectedCount' => count( $validators )
			],
			2 => [
				'validator'     => new NullableValidatorChain(
					...$validators = Values::createEmptyValidators()
				),
				'expectedCount' => count( $validators )
			],
			3 => [
				'validator'     => new NullableValidatorChain(
					...$validators = Values::createValidators()
				),
				'expectedCount' => count( $validators )
			],
		];
	}
}
