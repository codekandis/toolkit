<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;
use function implode;
use function sprintf;
use CodeKandis\ToolKit\Validators\IsArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanValidator;
use CodeKandis\ToolKit\Validators\IsClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsClassNameValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeValidator;
use CodeKandis\ToolKit\Validators\IsEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsEnumValidator;
use CodeKandis\ToolKit\Validators\IsFloatArrayValidator;
use CodeKandis\ToolKit\Validators\IsFloatStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsFloatStringValidator;
use CodeKandis\ToolKit\Validators\IsFloatValidator;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0045 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			45000 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45001 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45002 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45003 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45004 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45005 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45006 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45007 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45008 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45009 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45010 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45011 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45012 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45013 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45014 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45015 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45016 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45017 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45018 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45019 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45020 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45021 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45022 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45023 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45024 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45025 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45026 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45027 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45028 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45029 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45030 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45031 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45032 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45033 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45034 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45035 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45036 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45037 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45038 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45039 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45040 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45041 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45042 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45043 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45044 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45045 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45046 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45047 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45048 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45049 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45050 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45051 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45052 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45053 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45054 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45055 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45056 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45057 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45058 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45059 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45060 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45061 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45062 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45063 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45064 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45065 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45066 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45067 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45068 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45069 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45070 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45071 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45072 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45073 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45074 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45075 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45076 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45077 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45078 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45079 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45080 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45081 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45082 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45083 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45084 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45085 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45086 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45087 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45088 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45089 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45090 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45091 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45092 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45093 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45094 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45095 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45096 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45097 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45098 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45099 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45100 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45101 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45102 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45103 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45104 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45105 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45106 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45107 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45108 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45109 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45110 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45111 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45112 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45113 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45114 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45115 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45116 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45117 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45118 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45119 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45120 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45121 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45122 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45123 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45124 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45125 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45126 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45127 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45128 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45129 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45130 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45131 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45132 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45133 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45134 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45135 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45136 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45137 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45138 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45139 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45140 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45141 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45142 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45143 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45144 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45145 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			45146 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45147 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45148 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45149 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45150 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45151 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45152 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45153 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45154 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45155 => [
				'validator'                => new IsInstanceOfValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45156 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45157 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45158 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45159 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45160 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45161 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45162 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45163 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45164 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45165 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45166 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45167 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45168 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45169 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45170 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45171 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45172 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45173 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45174 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45175 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45176 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45177 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45178 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45179 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45180 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45181 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45182 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45183 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45184 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45185 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45186 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45187 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45188 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45189 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45190 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45191 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45192 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45193 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45194 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45195 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45196 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45197 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45198 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45199 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45200 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45201 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45202 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45203 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45204 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45205 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45206 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45207 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45208 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45209 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45210 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45211 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45212 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45213 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45214 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45215 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45216 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45217 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45218 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45219 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45220 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45221 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45222 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45223 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45224 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45225 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45226 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45227 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45228 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45229 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45230 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45231 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45232 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45233 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45234 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45235 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45236 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45237 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45238 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45239 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45240 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45241 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			45242 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45243 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45244 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45245 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45246 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45247 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45248 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45249 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45250 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45251 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45252 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45253 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45254 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45255 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45256 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45257 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45258 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45259 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45260 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45261 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45262 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45263 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45264 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45265 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45266 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45267 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45268 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45269 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45270 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45271 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45272 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45273 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45274 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45275 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45276 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45277 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45278 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45279 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45280 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45281 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45282 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45283 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45284 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45285 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45286 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45287 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45288 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45289 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45290 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45291 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45292 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45293 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45294 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45295 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45296 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45297 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45298 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45299 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45300 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45301 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45302 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45303 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45304 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45305 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45306 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45307 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45308 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45309 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45310 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45311 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45312 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45313 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45314 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45315 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45316 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45317 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45318 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45319 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45320 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45321 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45322 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45323 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45324 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45325 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45326 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45327 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45328 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45329 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45330 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45331 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45332 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45333 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45334 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45335 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45336 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45337 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45338 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45339 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45340 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45341 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45342 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45343 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45344 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45345 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45346 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45347 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45348 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45349 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45350 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45351 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45352 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45353 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45354 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45355 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45356 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45357 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45358 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45359 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45360 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45361 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45362 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45363 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45364 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45365 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45366 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45367 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45368 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45369 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45370 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45371 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45372 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45373 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45374 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45375 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45376 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45377 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45378 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45379 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45380 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45381 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45382 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45383 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45384 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45385 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45386 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45387 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45388 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45389 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45390 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45391 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45392 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45393 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45394 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45395 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45396 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45397 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45398 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45399 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45400 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45401 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45402 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45403 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45404 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45405 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45406 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45407 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45408 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45409 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45410 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45411 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45412 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45413 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45414 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45415 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45416 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45417 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45418 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45419 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45420 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45421 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45422 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45423 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45424 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45425 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45426 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45427 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45428 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45429 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45430 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45431 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45432 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45433 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45434 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45435 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45436 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45437 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45438 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45439 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45440 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45441 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45442 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45443 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45444 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45445 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45446 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45447 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45448 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45449 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45450 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45451 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45452 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45453 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45454 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45455 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			45456 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45457 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45458 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45459 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45460 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45461 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45462 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45463 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45464 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45465 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45466 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45467 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45468 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45469 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45470 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45471 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45472 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45473 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45474 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45475 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45476 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45477 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45478 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45479 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45480 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45481 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45482 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45483 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45484 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45485 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45486 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45487 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45488 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45489 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45490 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45491 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45492 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45493 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45494 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45495 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45496 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45497 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45498 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45499 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45500 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45501 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45502 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45503 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45504 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45505 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45506 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45507 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45508 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45509 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45510 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45511 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45512 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45513 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45514 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45515 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45516 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45517 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45518 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45519 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45520 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45521 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45522 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45523 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45524 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45525 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45526 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45527 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45528 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45529 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45530 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45531 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45532 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45533 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45534 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45535 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45536 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45537 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45538 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45539 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45540 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45541 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45542 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45543 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45544 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45545 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45546 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45547 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45548 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45549 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45550 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45551 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45552 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45553 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45554 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45555 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45556 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45557 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45558 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45559 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45560 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45561 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45562 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45563 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45564 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45565 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45566 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45567 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45568 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45569 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45570 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45571 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45572 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45573 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45574 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45575 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45576 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45577 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45578 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45579 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45580 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45581 => [
				'validator'                => new IsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45582 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45583 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45584 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45585 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45586 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45587 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45588 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45589 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45590 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45591 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45592 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45593 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45594 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45595 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45596 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45597 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45598 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45599 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45600 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45601 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45602 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45603 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45604 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45605 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45606 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45607 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45608 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45609 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45610 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45611 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45612 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45613 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45614 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45615 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45616 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45617 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45618 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45619 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45620 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45621 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45622 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45623 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45624 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45625 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45626 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45627 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45628 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45629 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45630 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45631 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45632 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45633 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45634 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45635 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45636 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45637 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45638 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45639 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45640 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45641 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45642 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45643 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45644 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45645 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45646 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45647 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45648 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45649 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45650 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45651 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45652 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45653 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45654 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45655 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45656 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45657 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45658 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45659 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45660 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45661 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45662 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45663 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45664 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45665 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45666 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45667 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45668 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45669 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45670 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45671 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45672 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45673 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45674 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45675 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45676 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45677 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45678 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45679 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			45680 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45681 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45682 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45683 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45684 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45685 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45686 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45687 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45688 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45689 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45690 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45691 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45692 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45693 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45694 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45695 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45696 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45697 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45698 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45699 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45700 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45701 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45702 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45703 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45704 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45705 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45706 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45707 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45708 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45709 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45710 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45711 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45712 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45713 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45714 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45715 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45716 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45717 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45718 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45719 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45720 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45721 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45722 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45723 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45724 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45725 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45726 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45727 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45728 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45729 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45730 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45731 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45732 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45733 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45734 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45735 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45736 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45737 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45738 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45739 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45740 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45741 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45742 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45743 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45744 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45745 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45746 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45747 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45748 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45749 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45750 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45751 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45752 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45753 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45754 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45755 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45756 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45757 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45758 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45759 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45760 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45761 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45762 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45763 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45764 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45765 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45766 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45767 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45768 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45769 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45770 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45771 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45772 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45773 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45774 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45775 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45776 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45777 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45778 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45779 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45780 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45781 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45782 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45783 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45784 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45785 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45786 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45787 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45788 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45789 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45790 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45791 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45792 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45793 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45794 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45795 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45796 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45797 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45798 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45799 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45800 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45801 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45802 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45803 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45804 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45805 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45806 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45807 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45808 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45809 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45810 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45811 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45812 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45813 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45814 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45815 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45816 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45817 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45818 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45819 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45820 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45821 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45822 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45823 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45824 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45825 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45826 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45827 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45828 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45829 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45830 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45831 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45832 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45833 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45834 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45835 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45836 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45837 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45838 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45839 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45840 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45841 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45842 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45843 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45844 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45845 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45846 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45847 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45848 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45849 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45850 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45851 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45852 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45853 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45854 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45855 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45856 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45857 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45858 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45859 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45860 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45861 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45862 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45863 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45864 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45865 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45866 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45867 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45868 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45869 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45870 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45871 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45872 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45873 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45874 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45875 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45876 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45877 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45878 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45879 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45880 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45881 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45882 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45883 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45884 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45885 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45886 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45887 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45888 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45889 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45890 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45891 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45892 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45893 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			45894 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45895 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45896 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45897 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45898 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45899 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45900 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45901 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45902 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45903 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45904 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45905 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45906 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45907 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45908 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45909 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45910 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45911 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45912 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45913 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45914 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45915 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45916 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45917 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45918 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45919 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45920 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45921 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45922 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45923 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45924 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45925 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45926 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45927 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45928 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45929 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45930 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45931 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45932 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45933 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45934 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45935 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45936 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45937 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45938 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45939 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45940 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45941 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45942 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45943 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45944 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45945 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45946 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45947 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45948 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45949 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45950 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45951 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45952 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45953 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45954 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45955 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45956 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45957 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45958 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45959 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45960 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45961 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45962 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45963 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45964 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45965 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45966 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45967 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45968 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45969 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45970 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45971 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45972 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45973 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45974 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45975 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45976 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45977 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45978 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45979 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45980 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45981 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45982 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45983 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45984 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45985 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45986 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45987 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45988 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45989 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45990 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45991 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45992 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45993 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45994 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45995 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45996 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45997 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45998 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			45999 => [
				'validator'                => new IsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
