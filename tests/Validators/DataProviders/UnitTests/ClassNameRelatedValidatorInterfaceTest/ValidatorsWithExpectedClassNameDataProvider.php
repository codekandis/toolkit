<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ClassNameRelatedValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsValidator;
use Override;

/**
 * Represents a data provider providing validators with expected class name.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithExpectedClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'validator'         => new IsInClassConstantsValidator( $className = Values::CLASS_NAME_1 ),
				'expectedClassName' => $className
			],
			1 => [
				'validator'         => new IsInClassConstantsValidator( $className = Values::CLASS_NAME_2 ),
				'expectedClassName' => $className
			],
			2 => [
				'validator'         => new NullableIsInClassConstantsValidator( $className = Values::CLASS_NAME_1 ),
				'expectedClassName' => $className
			],
			3 => [
				'validator'         => new NullableIsInClassConstantsValidator( $className = Values::CLASS_NAME_2 ),
				'expectedClassName' => $className
			]
		];
	}
}
